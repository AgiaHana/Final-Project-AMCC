<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Transaction;
use Midtrans;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        // Retrieve cart items and prepare for checkout
        $carts = Cart::with('product')->where('user_id', auth()->id())->get();

        // Initialize Midtrans configuration
        Midtrans\Config::$serverKey = config('midtrans.server_key');
        Midtrans\Config::$clientKey = config('midtrans.client_key');
        Midtrans\Config::$isProduction = config('midtrans.is_production') ? true : false;

        // Prepare transaction details
        $transaction_details = [
            'order_id' => 'ORDER-' . time(),
            'gross_amount' => $this->calculateTotalAmount($carts),
        ];

        // Populate items for the payment request
        $items = [];
        foreach ($carts as $cart) {
            $items[] = [
                'id' => $cart->product->id,
                'price' => $cart->product->price,
                'quantity' => $cart->quantity,
                'name' => $cart->product->name,
            ];
        }

        // Prepare customer details (optional)
        $customer_details = [
            'first_name' => auth()->user()->name,
            'email' => auth()->user()->email,
        ];

        // Transaction data to be sent to Midtrans
        $transaction_data = [
            'transaction_details' => $transaction_details,
            'item_details' => $items,
            'customer_details' => $customer_details,
        ];

        // Create Snap Token (to initiate payment page)
        $snapToken = Midtrans\Snap::getSnapToken($transaction_data);

        // Save transaction data to database
        $data = [
            'user_id' => auth()->id(),
            'transaction_details' => json_encode($transaction_details),
            'item_details' => json_encode($items),
            'customer_details' => json_encode($customer_details),
            'snap_token' => $snapToken,
        ];
        $transaction = auth()->user()->transactions()->create($data);

        // Clear cart
        Cart::where('user_id', auth()->id())->delete();

        // Redirect to payment page
        return view('checkout', compact('snapToken'));
    }

    private function calculateTotalAmount($carts)
    {
        $total = 0;
        foreach ($carts as $cart) {
            $total += $cart->product->price * $cart->quantity;
        }
        return $total;
    }

    public function thanks()
    {
        return view('thanks');
    }
    public function getTransaction()
    {
        $user_id = auth()->id();
        $transactions = Transaction::where('user_id', $user_id)->get();
        return view('history', ['transactions' => $transactions]);
    }
}
