<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Category;
use App\Models\Country;
use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $models = ProductModel::all();
        $categories = Category::all();
        $countries = Country::all();

        return view('admin.product.create', compact('models', 'categories', 'countries'));
    }
}
