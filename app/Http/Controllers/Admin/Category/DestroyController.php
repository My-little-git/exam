<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;

class DestroyController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return to_route('admin.category.index');
    }
}