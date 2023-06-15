<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'year',
        'description',
        'model_id',
        'category_id',
        'country_id',
        'amount'
    ];

    public function model(){
        return $this->belongsTo(ProductModel::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function images(){
        return $this->hasMany(ProductImages::class);
    }
}
