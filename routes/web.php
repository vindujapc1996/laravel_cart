<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/',[HomeController::class,'index'])->name('index');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/log',[HomeController::class,'log'])->name('log');
Route::get('/userdashboard',[HomeController::class,'userdashboard'])->name('userdashboard');
Route::get('/product',[HomeController::class,'product'])->name('product');
Route::get('/add_to_cart/{id}',[HomeController::class,'add_to_cart'])->name('add.cart');
Route::get('/view_cart',[HomeController::class,'view_cart'])->name('view.cart');
Route::get('/logout',[HomeController::class,'logout'])->name('logout');



