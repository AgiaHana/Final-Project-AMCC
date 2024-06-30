<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();
        $carts = Cart::where('user_id', $user_id)->with('product')->get();
        return view('cart', ['carts' => $carts]);
    }

    public function add(Request $request)
    {
        $user_id = Auth::id();
        $cart = Cart::where('user_id', $user_id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($cart) {
            $cart->quantity += $request->quantity;
            $cart->save();
        } else {
            Cart::create([
                'user_id' => $user_id,
                'product_id' => $request->product_id,
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->back();
    }

    public function destroy($id)
    {
        $user_id = Auth::id();
        $cart = Cart::where('user_id', $user_id)
            ->where('id', $id)
            ->first();

        if ($cart) {
            $cart->delete();
        }

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $user_id = Auth::id();
        $cart = Cart::where('user_id', $user_id)
            ->where('id', $id)
            ->first();

        if ($cart) {
            $cart->quantity = $request->input('quantity');
            $cart->save();
        }

        return redirect()->route('cart')->with('success', 'Item updated successfully');
    }
}
