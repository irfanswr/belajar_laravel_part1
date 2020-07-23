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

Route::get('pesan', function () {
	return "Halo, Selamat datang di tutorial laravel";
});

Route::get('tutorial', function () {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');

// route template blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');

//Form Validasi
Route::get('/input', 'MalasngodingController@input'); 
Route::post('/proses', 'MalasngodingController@proses');

//Eloquent
Route::get('/employee','EmployeeController@index');
Route::get('/employee/tambah','EmployeeController@tambah');
Route::post('/employee/store', 'EmployeeController@store');
Route::get('/employee/edit/{id}', 'EmployeeController@edit');
Route::put('/employee/update/{id}', 'EmployeeController@update');
Route::get('/employee/hapus/{id}', 'EmployeeController@delete');
//Cetak PDF
Route::get('/employee/cetak_pdf', 'EmployeeController@cetak_pdf');
//Export Excel
Route::get('/employee/export_excel', 'EmployeeController@export_excel');
//Import Excel
Route::post('/employee/import_excel', 'EmployeeController@import_excel');

//Soft Deletes
Route::get('/guru', 'GuruController@index');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
Route::get('/guru/trash', 'GuruController@trash');
Route::get('/guru/kembalikan/{id}', 'GuruController@kembalikan');
Route::get('/guru/kembalikan_semua', 'GuruController@kembalikan_semua');
Route::get('/guru/hapus_permanen/{id}', 'GuruController@hapus_permanen');
Route::get('/guru/hapus_permanen_semua', 'GuruController@hapus_permanen_semua');

//One to One
Route::get('/pengguna', 'PenggunaController@index');
//One to Many
Route::get('/article', 'WebController@index');
//Many to Many
Route::get('/anggota','MyController@index');

//Session
Route::get('/session','SessionController@index');
Route::get('/session/buat','SessionController@buatSession');
Route::get('/session/hapus','SessionController@hapusSession');

//Notifikasi dengan Flash Message
Route::get('/pesan','NotifController@index');
Route::get('/pesan/sukses','NotifController@sukses');
Route::get('/pesan/peringatan','NotifController@peringatan');
Route::get('/pesan/gagal','NotifController@gagal');


// localization default
Route::get('/form', function () {
    return view('biodata');
});
// localization pilih bahasa
Route::get('/{locale}/form', function ($locale) {
    App::setLocale($locale);
    return view('biodata');
});