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

Route::group(['prefix'=>'sistema'],function(){

Route::resource('categorias','CategoriasController');
Route::get('categorias/{id}/destroy',['uses'=>'CategoriasController@destroy','as'=>'categorias.destroy']);



Route::resource('productos','ProductosController');
Route::get('productos/{id}/destroy',['uses'=>'ProductosController@destroy','as'=>'productos.destroy']);


Route::resource('ventas','VentasController');



});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
