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
    return view('homeoficial');
});

Route::get('/homeoficial', function () {
    return view('homeoficial');
});

Route::get('/preguntasfrec', function () {
    return view('preguntasfrec');
});

Route::get('/productsindex','ProductController@index')->name('home');


Route::get('/products/create', 'ProductController@create');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');
Route::post('/products', 'ProductController@store')->name('products');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('products.edit');
Route::post('/products/update/{product}', 'ProductController@update')->name('products.update');
Route::post('/products/delete/{product}', 'ProductController@delete')->name('products.delete');

Route::post('/products', 'ProductController@store')->name('products');

Auth::routes();
