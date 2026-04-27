<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', function () {
    return view('buku.index', ['title' => 'Buku']);
});
Route::get('/buku/create', function () {
    return view('buku.create', ['title' => 'Create Buku']);
});
