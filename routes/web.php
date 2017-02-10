<?php

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
Route::get('/products', 'ProductController@getIndex');

Route::get('/products/show/{id}', 'ProductController@getShow');

Route::post('/products/sell/{id}', 'ProductController@postSell');
Route::post('/products/restock/{id}', 'ProductController@postRestock');

Route::get('/products/showForm', 'ProductController@showForm');
Route::post('/products/addProduct', 'ProductController@store');
Route::delete('/products/deleteProduct/{id}', 'ProductController@deleteProduct');

Route::get('/products/edit/{id}', 'ProductController@getEdit');
Route::post('/products/saveEdit', 'ProductController@saveEdit');
