<?php

namespace Database\Seeders;

use App\Models\ProductModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = ['MSI', 'Lenovo', 'Apple', 'HP', 'Dell'];

        foreach ($models as $model){
            ProductModel::create([
                'name' => $model
            ]);
        }
    }
}
