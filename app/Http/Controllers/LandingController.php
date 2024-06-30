<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    // public function cart()
    // {
    //     return view('cart');
    // }

    public function detail()
    {
        return view('detail');
    }

    public function produk()
    {
        return view('produk');
    }
}
