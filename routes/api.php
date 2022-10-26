<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/clientes', 'App\Http\Controllers\ClienteController@index');//Mostrar Cliente
Route::post('/clientes', 'App\Http\Controllers\ClienteController@store');//Crear Cliente
Route::put('/clientes/{cliente}', 'App\Http\Controllers\ClienteController@store');
Route::delete('/clientes/{cliente}', 'App\Http\Controllers\ClienteController@destroy');//Eliminar Cliente

Route::get('/detalles', 'App\Http\Controllers\DetallePlanMedioController@index');//Mostrar Detalles
