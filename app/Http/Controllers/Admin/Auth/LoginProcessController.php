<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginFormRequest;
use Illuminate\Support\Facades\Auth;

class LoginProcessController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(LoginFormRequest $request)
    {
        $credentials = $request->validated();

        if (Auth('admin')->attempt($credentials)){
            $request->session()->regenerate();

            return to_route('admin.product.index');
        }

        return back()->withErrors([
            'login' => 'Такого пользователя не существует',
        ])->onlyInput('login');
    }
}
