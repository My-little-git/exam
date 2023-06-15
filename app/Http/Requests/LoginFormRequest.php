<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'login' => ['required'],
            'password' => ['required', 'min:6'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
