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

/* Route::get('/', function () {
    return view('welcome');
}); */
//RUTAS
Route::get('/about', function (){
    return view('about');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/userprofile', function () {
    return view('userprofile');
});
//FIN DE RUTAS

Route::get('/adminCategorias', 'categorias@index');
Route::get('/formAgregarCategoria', 'categorias@create');
Route::post('/agregarCategoria', 'categorias@store');

#####################CRUD PRODUCTOS#######################
Route::get('/adminProductos', 'producto@index');
Route::get('/formAgregarProducto', 'producto@create');
