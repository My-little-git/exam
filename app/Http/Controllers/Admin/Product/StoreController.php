<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data = $request->validate([
            'images' => ['array'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp'],
            'name' => ['required'],
            'price' => ['required'],
            'description' => [],
            'year' => ['required'],
            'category_id' => ['required', 'integer'],
            'country_id' => ['required', 'integer'],
            'model_id' => ['required', 'integer'],
        ]);

        Product::create($data);

        return to_route('admin.product.index');
    }
}
