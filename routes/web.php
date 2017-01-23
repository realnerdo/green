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
Route::get('categoria/{category}', 'ProductController@show');
Route::get('coleccion', 'CollectionController@show');

Route::get('carrito', 'CartController@index');
Route::post('carrito/agregar', 'CartController@store');
Route::delete('carrito/{quantity}', 'CartController@destroyItem');

Route::get('pago', 'StoreController@checkout');
Route::get('gracias', 'StoreController@thankyou');
Route::get('pagina/{page}', 'PageController@show');

Auth::routes();

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', 'DashboardController@index');

    Route::get('productos', 'ProductController@index');
    Route::get('productos/nuevo', 'ProductController@create');
    Route::post('productos', 'ProductController@store');
    Route::get('productos/{product}/editar', 'ProductController@edit');
    Route::patch('productos/{product}', 'ProductController@update');
    Route::delete('productos/{product}', 'ProductController@destroy');

    Route::get('categorias', 'CategoryController@index');
    Route::get('categorias/nuevo', 'CategoryController@create');
    Route::post('categorias', 'CategoryController@store');
    Route::get('categorias/{category}/editar', 'CategoryController@edit');
    Route::patch('categorias/{category}', 'CategoryController@update');
    Route::delete('categorias/{category}', 'CategoryController@destroy');

    Route::get('paginas', 'PageController@index');
    Route::get('paginas/nuevo', 'PageController@create');
    Route::post('paginas', 'PageController@store');
    Route::get('paginas/{page}/editar', 'PageController@edit');
    Route::patch('paginas/{page}', 'PageController@update');
    Route::delete('paginas/{page}', 'PageController@destroy');

    Route::get('colecciones', 'CollectionController@index');
    Route::get('pedidos', 'OrderController@index');
});
