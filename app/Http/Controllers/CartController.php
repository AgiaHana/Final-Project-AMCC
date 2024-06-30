<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with('product')->get();
        return view('cart', ['carts' => $carts]);
    }

    public function add(Request $request)
    {
        $cart = Cart::where('user_id', auth()->id())->where('product_id', $request->product_id)->first();
        if ($cart) {
            $cart->quantity += $request->quantity;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }
        return redirect()->back();
    }

    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::findOrFail($id);
        $cart->quantity = $request->input('quantity');
        $cart->save();

        return redirect()->route('cart')->with('success', 'Item updated successfully');
    }
}
