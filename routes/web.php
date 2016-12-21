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

Route::get('/', 'HomeController@index');
Route::get('busqueda', 'SearchController@index');
Route::post('busqueda', 'SearchController@search');
Route::get('producto/{product}', 'ProductController@show');
Route::get('coleccion', 'CollectionController@show');
Route::get('carrito', 'StoreController@cart');
Route::get('pago', 'StoreController@checkout');
Route::get('gracias', 'StoreController@thankyou');

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index');

    Route::get('productos', 'ProductController@index');
    Route::get('productos/nuevo', 'ProductController@create');
    Route::post('productos', 'ProductController@store');
    Route::get('productos/{product}/editar', 'ProductController@edit');
    Route::put('productos/{product}', 'ProductController@update');
    Route::delete('productos/{product}', 'ProductController@destroy');

    Route::get('colecciones', 'CollectionController@index');
    Route::get('pedidos', 'OrderController@index');
});
