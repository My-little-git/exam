<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => "App\Http\Controllers\Admin"], function (){

   Route::group(['middleware' => 'guest'], function (){

       Route::group(['namespace' => 'Auth'], function (){

           Route::get('/login', LoginController::class)->name('login');
           Route::post('/login_process', LoginProcessController::class)->name('login_process');

       });

   });

   Route::group(['middleware' => 'auth:admin'], function (){

       Route::group(['namespace' => 'Auth'], function (){

           Route::post('/logout', LogoutController::class)->name('logout');

       });

       Route::group(['namespace' => 'Product', 'as' => 'product.'], function (){

           Route::get('/products', IndexController::class)->name('index');
           Route::get('/product/{product}', ShowController::class)->name('show');
           Route::get('/products/create', CreateController::class)->name('create');
           Route::post('/products', StoreController::class)->name('store');
           Route::get('/product/{product}', EditController::class)->name('edit');
           Route::patch('/product/{product}', UpdateController::class)->name('update');
           Route::delete('/product/{product}', DestroyController::class)->name('destroy');

       });

       Route::group(['namespace' => 'Category', 'as' => 'category.'], function (){

           Route::get('/categories', IndexController::class)->name('index');
           Route::delete('/category/{category}', DestroyController::class)->name('destroy');
           Route::get('/categories/create', CreateController::class)->name('create');
           Route::post('/categories', StoreController::class)->name('store');

       });

   });

});
