<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UsuarioController;

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


Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/productos', function () {
    return view('producto');
});

Route::get('/CrearProducto', function () {
    return view('crearProducto');
});

Route::get('/EditarProducto', function () {
    return view('editProducto');
});

Route::get('/admin',function(){
    return view('inicioAdmin');
});

Route::get('/listProd',function(){
    return view('listProducto');
});

Route::get('/registro',function(){
    return view('registro');
});

Route::get('/carrito',function(){
    return view('carrito');
});

Route::post('/saveUser','App\Http\Controllers\UsuarioController@store');
Route::put('/updateUser','App\Http\Controllers\UsuarioController@update');
Route::get('/deleteUser/{nickname}','App\Http\Controllers\UsuarioController@destroy');
Route::get('/allUsers','App\Http\Controllers\UsuarioController@allUsers');
Route::get('/userLogin/{nickname}/{password}','App\Http\Controllers\UsuarioController@login');
Route::get('/getUser/{nickname}','App\Http\Controllers\UsuarioController@getUser');
Route::get('/allProduct','App\Http\Controllers\ProductoController@allProducts');
Route::put('/updateProduct','App\Http\Controllers\ProductoController@update');
Route::put('/updateProductImg','App\Http\Controllers\ProductoController@updateImg');
Route::post('/saveProduct','App\Http\Controllers\ProductoController@store');
Route::get('/deleteProducto/{codigo}','App\Http\Controllers\ProductoController@destroy');
Route::get('/getProduct/{codigo}','App\Http\Controllers\ProductoController@getProducto');
Route::put('/updProductCant','App\Http\Controllers\ProductoController@updateCantidad');
Route::post('/saveFactura','App\Http\Controllers\FacturaController@store');
Route::get('/totalVentas','App\Http\Controllers\FacturaController@getTotalVenta');
Route::get('/getFacturaUser/{nickname}','App\Http\Controllers\FacturaController@getFacturaUser');
Route::post('/saveDetalle','App\Http\Controllers\DetalleFactController@store');
Route::post('/saveContacto','App\Http\Controllers\ContactoController@store');
Route::get('/getAllContacto','App\Http\Controllers\ContactoController@getAll');


