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
Route::get('/adminCategorias', 'categorias@index');
Route::get('/formAgregarCategoria', 'categorias@create');
Route::post('/agregarCategoria', 'categorias@store');

#####################CRUD PRODUCTOS#######################
Route::get('/adminProductos', 'producto@index');
Route::get('/formAgregarProducto', 'producto@create');
