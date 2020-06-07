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
//Rute Auth
Route::get('/', 'AuthController@index');
Route::get('/register', 'AuthController@register');
Route::get('/logout', 'AuthController@logout');
Route::post('/register/proc', 'AuthController@register_proc');
Route::post('/proc', 'AuthController@login_proc');
//Rute Admin
Route::get('/admin', 'AdminController@index');
Route::get('/admin/materi', 'AdminController@materi');
Route::get('/admin/tambahmateri', 'AdminController@tambahMateri');
Route::post('/admin/materi/store', 'AdminController@materiStore');
Route::get('/admin/materi/edit/{id}', 'AdminController@editMateri');
Route::post('/admin/materi/update/{id}', 'AdminController@materiUpdate');
Route::get('/admin/materi/hapus/{id}', 'AdminController@deleteMateri');
Route::get('/admin/materi/lihat/{id}', 'AdminController@lihatMateri');

//Rute User
