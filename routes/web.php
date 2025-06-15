<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController2;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TvController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeranjangBelanjaController;

Route::get('/', function () {
    return view('page');
});

Route::get('/halo', [Link::class,'helloworld']);

Route::get('/dosen', [Link::class,'index']);

//Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

Route::get('/formulir', [PegawaiController::class,'formulir']);
Route::post('/formulir/proses', [PegawaiController::class,'proses']);

Route::get('/blog/home', [BlogController::class,'home']);
Route::get('/blog/tentang', [BlogController::class,'tentang']);
Route::get('/blog/kontak', [BlogController::class,'kontak']);

Route::get('/linktree', function () {
	return view('linktree');
});

Route::get('/js1', function () {
	return view('js1');
});

Route::get('/pertama', function () {
	return view('pertama');
});

Route::get('/template1', function () {
	return view('template1');
});

Route::get('/index', function () {
	return view('index');
});

Route::get('/pegawai', [PegawaiController::class,'index']);
Route::get('/pegawai/tambah',[PegawaiController::class,'tambah']);
Route::get('/pegawai/cari',[PegawaiController::class,'cari']);
Route::post('/pegawai/store',[PegawaiController::class,'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class,'edit']);
Route::post('/pegawai/update',[PegawaiController::class,'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class,'hapus']);

Route::get('/tv', [TvController::class,'index']);
Route::get('/tv/tambah',[TvController::class,'tambah']);
Route::get('/tv/cari',[TvController::class,'cari']);
Route::post('/tv/store',[TvController::class,'store']);
Route::get('/tv/edit/{id}',[TvController::class,'edit']);
Route::post('/tv/update',[TvController::class,'update']);
Route::get('/tv/hapus/{id}',[TvController::class,'hapus']);

Route::get('/karyawan', [KaryawanController::class,'index']);
Route::get('/karyawan/tambah',[KaryawanController::class,'tambah']);
Route::post('/karyawan/store',[KaryawanController::class,'store']);
Route::get('/karyawan/hapus/{kodepegawai}',[KaryawanController::class,'hapus']);

// Menampilkan data keranjangAdd commentMore actions
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index4']);

// Menampilkan form tambah barang ke keranjang
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'tambah3']);

// Menyimpan data keranjang
Route::post('/keranjang/store', [KeranjangBelanjaController::class, 'store']);

// Menampilkan form edit barang ke keranjang
Route::get('/keranjang/edit/{id}', [KeranjangBelanjaController::class, 'edit']);

// Update data keranjang
Route::post('/keranjang/update', [KeranjangBelanjaController::class, 'update']);

// Menghapus data keranjang
Route::get('/keranjang/hapus/{id}', [KeranjangBelanjaController::class, 'hapus3']);
