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

//Auth::routes();
Auth::routes();

// Cliente
Route::get('/', ['as' => 'home', 'uses' => 'WebController@index']);
Route::get('/buscador', ['as' => 'buscador', 'uses' => 'WebController@buscador']);
Route::get('/proyectos', ['as' => 'proyectos', 'uses' => 'WebController@lista_proyectos']);
Route::get('/contacto', ['as' => 'contacto', 'uses' => 'WebController@contacto']);
Route::get('/nuestra-historia', ['as' => 'nuestra_historia', 'uses' => 'WebController@nuestra_historia']);
Route::get('/inmueble/{id}', ['as' => 'detalle_inmueble', 'uses' => 'WebController@detalle_inmueble']);
Route::get('/proyecto/{id}', ['as' => 'detalle_proyecto', 'uses' => 'WebController@detalle_proyecto']);

// Admin
Route::get('/admin', ['as' => 'dashboard', 'uses' => 'Admin\AdminController@Dasboard']);
Route::get('/admin/login', ['as' => 'login', 'uses' => 'Admin\AdminController@Login']);
Route::get('/admin/inmuebles', ['as' => 'admin_lista_inmuebles', 'uses' => 'Admin\AdminController@ListaInmuebles']);
