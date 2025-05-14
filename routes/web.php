<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Halo', function () {
    return ('Halo guyss wth');
});

Route::get('/blog', function () {
	return view('blog');
});

Route::get('/haloob', [Link::class,'helloworld']);

Route::get('/pertama', function () {
	return view('pertama');
});
