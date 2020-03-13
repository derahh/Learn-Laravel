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

Route::resource('kontak', 'Kontak');
Route::get('/', function () {
    return view('index');
});

Route::get('/kontak_create', function () {
    return view('kontak_create');
});

Route::get('/api/kontak','ControllerKontak@index');
Route::get('/api/kontak/{id}','ControllerKontak@show');
Route::post('/api/kontak/store','ControllerKontak@store');

Route::get('halaman-kedua', function() {
    return view('halamandua');
});