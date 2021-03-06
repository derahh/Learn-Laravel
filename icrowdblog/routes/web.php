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

/*
* Keterangan :
* url, controller@metode
* atau
* url, metode
* dengan
* return folder(namafile)
* atau 
* return nilai
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function() {
    return "ini halaman test1";
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', 'BlogController@index');
// Route::get('/blog/{id}', 'BlogController@show');
Route::get('/blog/{id}', 'BlogController@single');