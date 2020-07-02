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
Route::get('/admin/users', 'AdminController@users');
Route::get('/admin/users/hapus/{id}', 'AdminController@deleteUser');
Route::get('/admin/users/setA/{id}', 'AdminController@setAdmin');
Route::get('/admin/users/setU/{id}', 'AdminController@setUser');
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
Route::get('/user/wawancara', 'UserController@wawancara');
Route::get('/user/wawancara2', 'UserController@wawancara2');
Route::get('/user/wawancara3/{agama}', 'UserController@wawancara3');
Route::get('/user/wawancara4', 'UserController@wawancara4');
Route::post('/user/wawancara/store', 'UserController@wawancaraStore');
Route::post('/user/wawancara2/store', 'UserController@wawancara2Store');
Route::post('/user/wawancara3store/buddha', 'UserController@wawancara3StoreBuddha');
Route::post('/user/wawancara3store/hindu', 'UserController@wawancara3StoreHindu');
Route::post('/user/wawancara3store/katholik', 'UserController@wawancara3StoreKatholik');
Route::post('/user/wawancara3store/protestan', 'UserController@wawancara3StoreProtestan');
Route::post('/user/wawancara4/store', 'UserController@wawancara4Store');
