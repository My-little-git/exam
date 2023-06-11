<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Product $product)
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

        $product->update($data);

        return to_route('admin.product.index');
    }
}
