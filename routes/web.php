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
//Rute Materi
Route::get('/admin/materi', 'AdminController@materi');
Route::get('/admin/materi/tambah', 'AdminController@tambahMateri');
Route::post('/admin/materi/store', 'AdminController@materiStore');
Route::get('/admin/materi/edit/{id}', 'AdminController@editMateri');
Route::post('/admin/materi/update/{id}', 'AdminController@materiUpdate');
Route::get('/admin/materi/hapus/{id}', 'AdminController@deleteMateri');
Route::get('/admin/materi/lihat/{id}', 'AdminController@lihatMateri');
//Rute Tugas
Route::get('/admin/tugas', 'AdminController@tugas');
Route::get('/admin/tugas/tambah', 'AdminController@tambahTugas');
Route::post('/admin/tugas/store', 'AdminController@tugasStore');
Route::get('/admin/tugas/edit/{id}', 'AdminController@editTugas');
Route::post('/admin/tugas/update/{id}', 'AdminController@tugasUpdate');
Route::get('/admin/tugas/hapus/{id}', 'AdminController@deleteTugas');
Route::get('/admin/tugas/lihat/{id}', 'AdminController@lihatTugas');
//Rute Kuis
Route::get('/admin/kuis', 'AdminController@kuis');

//Rute User
Route::get('/user', 'UserController@index');
Route::get('/user/materi', 'UserController@materi');
Route::get('/user/materi/lihat/{id}', 'UserController@lihatMateri');
Route::get('/user/tugas', 'UserController@tugas');
Route::get('/user/tugas/lihat/{id}', 'UserController@lihatTugas');
Route::post('/user/tugas/store/{id}', 'UserController@tugasStore');
Route::get('/user/tugas/hapus/{id}', 'UserController@deleteTugas');
