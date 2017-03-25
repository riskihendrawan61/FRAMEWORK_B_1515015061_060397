<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('Hello-world', function () {
    return 'Hello-world';
});
/*Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "Hallo world dari pengguna $pengguna";
});
Route::get('berita/{berita?}', function ($berita="Laravel 5") {
    return "berita $berita belum di baca";
});*/
Route::get('pengguna','penggunacontroller@awal');
Route::get('pengguna/tambah','penggunacontroller@tambah');
Route::get('pengguna/{pengguna}','penggunacontroller@lihat');
Route::post('pengguna/simpan','penggunacontroller@simpan');
Route::get('pengguna/edit/{pengguna}','penggunacontroller@edit');
Route::post('pengguna/edit/{pengguna}','penggunacontroller@update');
Route::get('pengguna/hapus/{pengguna}','penggunacontroller@hapus');


Route::get('dosen', 'dosencontroller@awal');
Route::get('dosen/tambah', 'dosencontroller@tambah');

Route::get('mahasiswa', 'mahasiswacontroller@awal');
Route::get('mahasiswa/tambah', 'mahasiswacontroller@tambah');

Route::get('ruangan', 'ruangancontroller@awal');
Route::get('ruangan/tambah', 'ruangancontroller@tambah');
Route::get('ruangan/{ruangan}','ruangancontroller@lihat');
Route::post('ruangan/simpan','ruangancontroller@simpan');
Route::get('ruangan/edit/{ruangan}','ruangancontroller@edit');
Route::post('ruangan/edit/{ruangan}','ruangancontroller@update');
Route::get('ruangan/hapus/{ruangan}','ruangancontroller@hapus');

Route::get('matakuliah', 'matakuliahcontroller@awal');
Route::get('matakuliah/tambah', 'matakuliahcontroller@tambah');
Route::get('matakuliah/{matakuliah}','matakuliahcontroller@lihat');
Route::post('matakuliah/simpan','matakuliahcontroller@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahcontroller@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahcontroller@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahcontroller@hapus');

Route::get('dosen_matakuliah', 'dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/tambah', 'dosen_matakuliahcontroller@tambah');

Route::get('jadwal_matakuliah', 'jadwal_matakuliahcontroller@awal');
Route::get('jadwal_matakuliah/tambah', 'jadwal_matakuliahcontroller@tambah');