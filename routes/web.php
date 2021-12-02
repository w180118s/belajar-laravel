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
    return view('index');
});

Route::get('/crud', 'CrudController@index')->name('cr');
Route::get('/crud/tambah', 'CrudController@tambah')->name('cr.t');
Route::post('/crud/simpan', 'CrudController@simpan')->name('cr.s');
Route::get('/crud/delete/{id}', 'CrudController@delete')->name('cr.d');
Route::get('/crud/{id}/edit', 'CrudController@edit')->name('cr.e');
Route::patch('/crud/{id}', 'CrudController@update')->name('cr.u');
