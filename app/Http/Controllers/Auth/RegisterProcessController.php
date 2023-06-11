<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterProcessController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'surname' => ['required'],
            'patronymic' => [],
            'login' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users', 'email'],
            'password' => ['required', 'min:6', 'confirmed'],
        ]);

        $user = User::create($credentials);
        Auth::login($user);
        return redirect()->intended('/');
    }
}
