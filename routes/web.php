<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;


Route::get('/buku', [BukuController::class, 'index']);

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');




