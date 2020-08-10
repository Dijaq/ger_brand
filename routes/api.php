<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("cotizaciones", "CotizacionController@index");
Route::post("cotizaciones", "CotizacionController@store");
Route::get("cotizaciones/{id}", "CotizacionController@show");
Route::put("cotizaciones/{id}", "CotizacionController@update");
Route::delete("cotizaciones/{id}", "CotizacionController@destroy");

Route::get("cuentas", "CuentasController@index");

Route::get("paquete_servicios", "PaqueteServiciosController@index");

Route::get("directorio_categorias", "DirectorioCategoriasController@index");
Route::post("directorio_categorias", "DirectorioCategoriasController@store");
Route::get("directorio_categorias/{id}", "DirectorioCategoriasController@show");
Route::put("directorio_categorias/{id}", "DirectorioCategoriasController@update");
Route::delete("directorio_categorias/{id}", "DirectorioCategoriasController@destroy");

Route::get("directorio_empresas", "DirectorioEmpresasController@index");
Route::post("directorio_empresas", "DirectorioEmpresasController@store");
Route::get("directorio_empresas/{id}", "DirectorioEmpresasController@show");
Route::put("directorio_empresas/{id}", "DirectorioEmpresasController@update");
Route::delete("directorio_empresas/{id}", "DirectorioEmpresasController@destroy");

Route::get("directorio_personas", "DirectorioPersonasController@index");
Route::post("directorio_personas", "DirectorioPersonasController@store");
Route::get("directorio_personas/{id}", "DirectorioPersonasController@show");
Route::put("directorio_personas/{id}", "DirectorioPersonasController@update");
Route::delete("directorio_personas/{id}", "DirectorioPersonasController@destroy");

Route::post("personas", "PersonasController@store");