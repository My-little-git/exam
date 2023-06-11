<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;

class AboutController extends Controller
{
    public function __invoke()
    {
        $products = Product::orderBy('created_at', 'desc')->limit(5)->get();

        return view('about', compact('products'));
    }
}
