<?php

namespace App\Http\Controllers;

use App\Models\Cart;

class CartController extends Controller
{
    public function __invoke()
    {
        $cart = Cart::where('user_id', auth()->id())->get();
        return view('cart', compact('cart'));
    }
}
