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
    return 'welcome';
});

Route::get('/usuario', 'UserController@index')
->name('users.index');

Route::get('/usuario/{id}', 'UserController@show')
->where('id', '[0-9]+')
->name('users.show');

Route::get('/usuario/nuevo', 'UserController@create')
//get vervbo para definir ruta http, solicitar y pedir informacion
->name('users.create');

Route::post('/usuario/crear', 'UserController@store'); //metodo + url; enviar y procesar la informacion
