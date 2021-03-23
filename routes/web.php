<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
Route::view('/register','register');

Route::post('/register',[UserController::class,'register']);

Route::get('/login', function () {
    return view('login');
});

Route::post('/login',[UserController::class,'login']);

Route::get('/logout', function () {
    Session::forget('user');
//aita dara browser a session bondho hobe r user account theke logout hoye jabe     
    return redirect('login');
});

Route::get('/',[ProductController::class,'index']);

Route::get('detail/{id}',[ProductController::class,'detail']);
//id dara poti product er detail ber korte hobe

Route::get('search',[ProductController::class,'search']);

Route::post("add_to_cart",[ProductController::class,'AddToCart']);

Route::get("cartlist",[ProductController::class,'CartList']);

Route::get("remove_cart/{id}",[ProductController::class,'RemoveCart']);

Route::get("order_now",[ProductController::class,'OrderNow']);

Route::post("order_place",[ProductController::class,'OrderPlace']);

Route::get("my_orders_list",[ProductController::class,'MyOrdersList']);
