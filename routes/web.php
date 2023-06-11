<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function(){

    Route::get('/', AboutController::class)->name('about');
    Route::get('/cart', CartController::class)->name('cart');
    Route::get('/location', LocationController::class)->name('location');

    Route::group(['namespace' => 'Product', 'as' => 'product.'], function(){

        Route::get('/products', [IndexController::class])->name('index');
        Route::get('/product/{product}', [ShowController::class])->name('show');

    });

    Route::group(['middleware' => 'auth:web'], function(){

        Route::get('/profile', ProfileController::class)->name('profile');

        Route::group(['namespace' => 'Auth'], function(){

            Route::post('/logout', LogoutController::class)->name('logout');

        });
    });

    Route::group(['middleware' => 'guest'], function (){

        Route::group(['namespace' => 'Auth'], function(){

        Route::get('/login', LoginController::class)->name('login');
        Route::post('/login_process', LoginProcessController::class)->name('login_process');
        Route::get('/register', RegisterController::class)->name('register');;
        Route::post('/register_process', RegisterProcessController::class)->name('register_process');

        });
    });
});


