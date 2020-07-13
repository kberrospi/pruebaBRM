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
/* 
Route::get('/inventory', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create'); */
Route::resource('products', 'ProductsController');
Route::resource('invoices', 'InvoicesController');
Route::resource('items', 'ItemsController');
Route::post("/items/create", "ItemsController@addProductItem")->name("addProductItem");