<?php

use App\Http\Middleware\CekloginMiddleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::post('/', 'otentikasi\OtentikasiController@login')->name('login');

Route::get('/', 'otentikasi\OtentikasiController@index')->name('index')->middleware('IsLoginMiddleware');
Route::group(['middleware'=>'CekLoginMiddleware'], function () {
        Route::get('/dashboard','HomeController@dashboard')->name('dashboard');
        Route::get('/crud', 'CrudController@index')->name('cr');
        Route::get('/crud/tambah', 'CrudController@tambah')->name('cr.t');
        Route::post('/crud/simpan', 'CrudController@simpan')->name('cr.s');
        Route::get('/crud/delete/{id}', 'CrudController@delete')->name('cr.d');
        Route::get('/crud/{id}/edit', 'CrudController@edit')->name('cr.e');
        Route::patch('/crud/{id}', 'CrudController@update')->name('cr.u');
        Route::get('logout', 'otentikasi\OtentikasiController@logout')->name('logout');
        Route::get('profile', 'DataSiswa@profile')->name('profile');

});

Route::get('/home', 'HomeController@index')-> name('home')->middleware('CekLoginMiddleware');

// Route::group(['middleware'=>'auth'], function () {
    // Auth::routes();
    // Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
    // Route::post('/', 'Auth\LoginController@login')->name('login');
    // Route::get('/home', 'HomeController@index')->name('home');
