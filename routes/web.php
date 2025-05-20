<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;

Route::get('/', function () {
    return view('page');
});

Route::get('/halo', [Link::class,'helloworld']);

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
