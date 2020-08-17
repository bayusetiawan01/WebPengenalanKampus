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
Route::view('/', 'landing');
Route::get('/login', 'AuthController@index');
Route::get('/register12345678', 'AuthController@register');
Route::get('/logout', 'AuthController@logout');
Route::post('/register/proc', 'AuthController@register_proc');
Route::post('/proc', 'AuthController@login_proc');
//Rute Admin
Route::get('/admin', 'AdminController@index');
Route::get('/admin/users', 'AdminController@users');
Route::get('/admin/users/hapus/{id}', 'AdminController@deleteUser');
Route::get('/admin/users/restore/{id}', 'AdminController@restoreUser');
Route::get('/admin/users/setA/{id}', 'AdminController@setAdmin');
Route::get('/admin/users/setU/{id}', 'AdminController@setUser');
Route::get('/admin/profile', 'AdminController@profile');
Route::post('/admin/profile/update', 'AdminController@profileUpdate');
Route::get('/admin/password', 'AdminController@password');
Route::post('/admin/password/update', 'AdminController@passwordUpdate');
Route::post('/admin/pengumuman/update', 'AdminController@pengumumanUpdate');
//Rute Himpunan
Route::get('/himpunan', 'HimpunanController@index');
Route::get('/himpunan/wawancara', 'HimpunanController@wawancara');
Route::get('/himpunan/wawancarau/{id}', 'HimpunanController@isiwawancara');
Route::get('/himpunan/profile', 'HimpunanController@profile');
Route::get('/himpunan/password', 'HimpunanController@password');
Route::post('/himpunan/password/update', 'HimpunanController@passwordUpdate');
Route::post('/himpunan/profile/update', 'HimpunanController@profileUpdate');
Route::post('/himpunan/wawancara/store', 'HimpunanController@wawancaraStore');
Route::post('/himpunan/wawancara/update', 'HimpunanController@wawancaraUpdate');
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
Route::post('/admin/tugas/store', 'AdminController@tugasStore')->name('tugasstore');
Route::get('/admin/tugas/edit/{id}', 'AdminController@editTugas');
Route::post('/admin/tugas/update/{id}', 'AdminController@tugasUpdate');
Route::get('/admin/tugas/hapus/{id}', 'AdminController@deleteTugas');
Route::get('/admin/tugas/lihat/{id}', 'AdminController@lihatTugas');
//Rute Kuis
Route::get('/admin/kuis', 'AdminController@kuis');
Route::get('/admin/kuis/aktif/{id}', 'AdminController@aktivKuis');
Route::get('/admin/kuis/nonaktif/{id}', 'AdminController@nonaktivKuis');
Route::post('/admin/kuis/store', 'AdminController@kuisStore');
Route::get('/admin/kuis/edit/{id}', 'AdminController@editKuis');
Route::post('/admin/soal/store', 'AdminController@soalStore');
Route::get('/admin/soal/hapus/{id}', 'AdminController@deleteSoal');
Route::post('/admin/kuis/update/{id}', 'AdminController@kuisUpdate');
Route::get('/admin/kuis/hapus/{id}', 'AdminController@deleteKuis');
Route::get('/admin/kuis/lihat/{id}', 'AdminController@lihatKuis');
//Rute Pemetaan
Route::get('/admin/pemetaan', 'AdminController@pemetaan');
Route::get('/admin/pemetaan/{id}', 'AdminController@hasilpemetaan');
Route::get('/admin/pemetaans/aktif', 'AdminController@aktifkanPemetaan');
Route::get('/admin/pemetaans/nonaktif', 'AdminController@nonaktifkanPemetaan');
//Rute AdminWawancara
Route::get('/admin/wawancara', 'AdminController@wawancara');
Route::get('/admin/wawancara/{id}', 'AdminController@hasilwawancara');
Route::get('/admin/wawancarau/{id}', 'AdminController@isiwawancara');
Route::post('/admin/wawancara/store', 'AdminController@wawancaraStore');
Route::post('/admin/wawancara/update', 'AdminController@wawancaraUpdate');
Route::get('/admin/wawancaraupdf/{id}', 'AdminController@isiwawancarapdf');
Route::get('/himpunan/wawancaraupdf/{id}', 'HimpunanController@isiwawancarapdf');
Route::post('/himpunan/wawancara/store', 'HimpunanController@wawancaraStore');
Route::post('/himpunan/wawancara/update', 'HimpunanController@wawancaraUpdate');
Route::get('/admin/export_wawancara/{id}', 'AdminController@export_excel');
Route::get('/admin/tambah_sbmptn_matematika', 'AdminController@tambah_sbmptn_matematika');
Route::get('/admin/tambah_sbmptn_kimia', 'AdminController@tambah_sbmptn_kimia');
Route::get('/admin/tambah_sbmptn_fisika', 'AdminController@tambah_sbmptn_fisika');
Route::get('/admin/tambah_sbmptn_biologi', 'AdminController@tambah_sbmptn_biologi');
Route::get('/admin/tambah_sbmptn_statis', 'AdminController@tambah_sbmptn_statis');
Route::get('/admin/tambah_sbmptn_geofis', 'AdminController@tambah_sbmptn_geofis');
Route::get('/admin/tambah_sbmptn_ti', 'AdminController@tambah_sbmptn_ti');
Route::get('/admin/tambah_sbmptn_te', 'AdminController@tambah_sbmptn_te');
Route::get('/admin/tambah_sbmptn_aktu', 'AdminController@tambah_sbmptn_aktu');

//Rute User
Route::get('/user', 'UserController@index');
Route::get('/user/materi', 'UserController@materi');
Route::get('/user/profile', 'UserController@profile');
Route::post('/user/profile/update', 'UserController@profileUpdate');
Route::get('/user/password', 'UserController@password');
Route::post('/user/password/update', 'UserController@passwordUpdate');
Route::get('/user/kuis', 'UserController@kuis');
Route::get('/user/kuis/lihat/{id}', 'UserController@lihatKuis');
Route::post('/user/kuis/store/{id}', 'UserController@kuisStore');
Route::get('/user/pemetaan', 'UserController@pemetaan');
Route::get('/user/pemetaan/1', 'UserController@pemetaan1');
Route::get('/user/pemetaan/2', 'UserController@pemetaan2');
Route::get('/user/pemetaan/3', 'UserController@pemetaan3');
Route::get('/user/pemetaan/4', 'UserController@pemetaan4');
Route::get('/user/pemetaan/5', 'UserController@pemetaan5');
Route::post('/user/pemetaan/store/1', 'UserController@pemetaanStore1');
Route::post('/user/pemetaan/store/2', 'UserController@pemetaanStore2');
Route::post('/user/pemetaan/store/3', 'UserController@pemetaanStore3');
Route::post('/user/pemetaan/store/4', 'UserController@pemetaanStore4');
Route::get('/user/materi/lihat/{id}', 'UserController@lihatMateri');
Route::get('/user/tugas', 'UserController@tugas');
Route::get('/user/tugas/lihat/{id}', 'UserController@lihatTugas');
Route::post('/user/tugas/store/{id}', 'UserController@tugasStore');
Route::get('/user/tugas/hapus/{id}', 'UserController@deleteTugas');
Route::get('/user/wawancara', 'UserController@wawancara');
Route::get('/user/wawancara/edit', 'UserController@wawancaraEdit');
Route::get('/user/wawancara2', 'UserController@wawancara2');
Route::get('/user/wawancara2/edit', 'UserController@wawancara2Edit');
Route::get('/user/wawancara3/{agama}', 'UserController@wawancara3');
Route::get('/user/wawancara4', 'UserController@wawancara4');
Route::get('/user/wawancara5', 'UserController@wawancara5');
Route::get('/user/izin', 'UserController@izin');
Route::get('/user/pernyataan', 'UserController@pernyataan');
Route::post('/user/wawancara/store', 'UserController@wawancaraStore');
Route::post('/user/wawancara/update', 'UserController@wawancaraUpdate');
Route::post('/user/wawancara2/store', 'UserController@wawancara2Store');
Route::post('/user/wawancara2/update', 'UserController@wawancara2Update');
Route::post('/user/wawancara3store/buddha', 'UserController@wawancara3StoreBuddha');
Route::post('/user/wawancara3store/hindu', 'UserController@wawancara3StoreHindu');
Route::post('/user/wawancara3store/katholik', 'UserController@wawancara3StoreKatholik');
Route::post('/user/wawancara3store/protestan', 'UserController@wawancara3StoreProtestan');
Route::post('/user/wawancara3store/islam', 'UserController@wawancara3StoreIslam');
Route::post('/user/wawancara4/store', 'UserController@wawancara4Store');
Route::post('/user/wawancara5/store', 'UserController@wawancara5Store');
Route::post('/user/izinstore', 'UserController@izinStore')->name('izinstore');
Route::post('/user/pernyataanstore', 'UserController@pernyataanStore')->name('pernyataanstore');
Route::get('/user/time/{id}', 'UserController@waktu');
