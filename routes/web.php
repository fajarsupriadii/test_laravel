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
    return view('welcome');
});
Route::get('/kontak','C_kontak@index');
Route::get('/kontak/{id}','C_kontak@show');
Route::post('/kontak/store','C_kontak@store');
Route::post('/kontak/update/{id}','C_kontak@update');
Route::post('/kontak/delete/{id}','C_kontak@destroy');
