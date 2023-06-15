<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'images' => ['array'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp'],
            'name' => ['required'],
            'price' => ['required'],
            'description' => ['string'],
            'year' => [],
            'category_id' => ['required', 'integer'],
            'country_id' => ['required', 'integer'],
            'model_id' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return Auth('admin')->check();
    }
}
