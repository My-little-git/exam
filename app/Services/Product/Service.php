<?php

namespace App\Services\Product;

use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data){
        $images = $data['images'];
        unset($data['images']);

        DB::transaction(function() use ($data, $images){

            $product = Product::create($data);

            foreach ($images as $image){
                $path = $image->store('products', 'public');

                ProductImages::create([
                    'product_id' => $product->id,
                    'path' => $path
                ]);
            }

        });
    }

    public function update($data, $product){

        $product->update($data);

    }

    public function destroy($product){
        DB::transaction(function() use ($product) {
            foreach ($product->images as $image){
                Storage::disk('public')->delete($image->path);
                $image->delete();
            }

            $product->delete();
        });
    }
}
