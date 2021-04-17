<?php

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
    return view('welcome');
});


Route::get('/products', 'App\Http\Controllers\ProductsController@products')->name('products');
Route::get('/cart', 'App\Http\Controllers\ProductsController@cart')->name('products');
Route::get('add-to-cart/{id}', 'App\Http\Controllers\ProductsController@addToCart');
