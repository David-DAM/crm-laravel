<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login',[LoginController::class,'login']);

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register',[UserController::class,'store']);

Route::middleware('auth')->prefix('/web')->group(function(){

    Route::get('home', function () {
        return view('web.home');
    })->name('home');

    Route::post('/home',[LoginController::class,'logout']);

    Route::resource('users',UserController::class)
    ->name('index','web.users.index')
    ->name('destroy','web.users.destroy');

    Route::resource('products',ProductController::class)
    ->name('index','web.products.index')
    ->name('destroy','web.products.destroy')
    ->name('store','web.products.store')
    ->name('update','web.products.update');

});