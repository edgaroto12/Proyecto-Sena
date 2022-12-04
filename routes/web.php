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
Route::get('/clientes', function () {
    return view('clientes');
});
Route::get('/productos', function () {
    return view('productos');
});
Route::get('/pedidos', function () {
    return view('pedidos');
});
Route::get('/cargos', function () {
    return view('cargos');
});
Route::get('/detalle_pedidos', function () {
    return view('detalle_pedidos');
});
Route::get('/prueba', function () {
    return view('prueba');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('api/cargos/index', 'CargosController@index');
Route::post('api/cargos/guardar', 'CargosController@store');
Route::put('api/cargos/actualizar', 'CargosController@update');
Route::delete('api/cargos/eliminar', 'CargosController@destroy');
Route::get('api/productos/index', 'ProductosController@index');
Route::post('api/productos/guardar', 'ProductosController@store');
Route::put('api/productos/actualizar', 'ProductosController@update');
Route::delete('api/productos/eliminar', 'ProductosController@destroy');
Route::get('api/pedidos/index', 'PedidosController@index');
Route::post('api/pedidos/guardar', 'PedidosController@store');
Route::put('api/pedidos/actualizar', 'PedidosController@update');
Route::delete('api/pedidos/eliminar', 'PedidosController@destroy');
Route::get('api/personas/index', 'PersonasController@index');
Route::post('api/personas/guardar', 'PersonasController@store');
Route::put('api/personas/actualizar', 'PersonasController@update');
Route::delete('api/personas/eliminar', 'PersonasController@destroy');
Route::get('api/detalle_pedidos/index', 'DetallePedidosController@index');
Route::post('api/detalle_pedidos/guardar', 'DetallePedidosController@store');
Route::put('api/detalle_pedidos/actualizar', 'DetallePedidosController@update');
Route::delete('api/detalle_pedidos/eliminar', 'DetallePedidosController@destroy');
Route::get('api/cargos/index', 'CargosController@index');
Route::post('api/cargos/guardar', 'CargosController@store');
Route::put('api/cargos/actualizar', 'CargosController@update');
Route::delete('api/cargos/eliminar', 'CargosController@destroy');
