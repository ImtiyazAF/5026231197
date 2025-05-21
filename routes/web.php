<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('page');
});

Route::get('/halo', [Link::class,'helloworld']);

Route::get('/dosen', [Link::class,'index']);

Route::get('/pegawai/{nama}', [PegawaiController::class,'index']);

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
