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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ['as' => 'inicio', 'uses' => 'WebController@index']);
Route::get('/contacto', ['as' => 'homes', 'uses' => 'WebController@contacto']);
Route::get('/cotiza', ['as' => 'web.cotiza', 'uses' => 'WebController@cotiza']);
Route::get('/cotiza/cotizador', ['as' => 'web.cotiza-aqui', 'uses' => 'WebController@cotiza_aqui']);
Route::get('/servicios', ['as' => 'homes', 'uses' => 'WebController@servicios']);
Route::get('/servicios/tipo', ['as' => 'homes', 'uses' => 'WebController@servicios_tipo']);
Route::get('/blog', ['as' => 'homes', 'uses' => 'WebController@blog']);
Route::get('/blog/articulo', ['as' => 'homes', 'uses' => 'WebController@blog_articulo']);
Route::get('/soporte', ['as' => 'homes', 'uses' => 'WebController@soporte']);
Route::get('/soporte/nombre', ['as' => 'homes', 'uses' => 'WebController@soporte_articulo']);
