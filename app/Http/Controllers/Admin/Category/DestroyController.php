<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class DestroyController extends Controller
{
    public function __invoke(Category $category)
    {
        DB::transaction(function () use ($category){
            foreach ($category->products as $product){
                if (Storage::disk('public')->delete($product->path)){
                    $product->delete();
                }
            }
            $category->delete();
        });

        return to_route('admin.category.index');
    }
}
