<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Category;
use App\Models\Country;
use App\Models\Product;
use App\Models\ProductModel;

class EditController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $product)
    {
        $models = ProductModel::all();
        $categories = Category::all();
        $countries = Country::all();

        return view('admin.product.edit', compact('product', 'models', 'categories', 'countries'));
    }
}
