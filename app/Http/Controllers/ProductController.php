<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::all();
        return view('produk', ['products' => $products]);
    }

    public function getProduct($id)
    {
        $product = Product::find($id);
        return view('produk', ['product' => $product]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Product::where('name', 'like', '%' . $search . '%')->paginate(10);
        return view('produk', ['products' => $products]);
    }
}
