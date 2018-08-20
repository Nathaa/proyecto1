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

Route::get('/usuario', function () {
    return 'Usuario';
});

Route::get('/usuario/{id}', function ($id) {
    return "Mostrando detalle del usuario:{$id}";
})->where('id', '[0-9]+');

Route::get('/usuario/nuevo', function () {
    return 'Crear Nuevo Usuario';
});

Route::get('/usuario/cadejo', function () {
    return 'Crear Nuevo Usuario';
});
