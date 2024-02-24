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

//Home routes
Route::get('/', 'App\Http\Controllers\LandingPageController@index')->name('home.index');

//Product routes
Route::get('/products', 'App\Http\Controllers\ProductController@showProducts')->name('product.showProducts');
Route::get('/products/create', 'App\Http\Controllers\ProductController@createProduct')->name('product.createProduct');
Route::post('/products/save', 'App\Http\Controllers\ProductController@saveProduct')->name('product.saveProduct');
Route::get('/products/specificProduct/{id}', 'App\Http\Controllers\ProductController@showSpecificProduct')->name('product.specificProduct');
Route::get('product/specificProduct/delete{id}', 'App\Http\Controllers\ProductController@deleteProduct')->name('product.deleteProduct');
