<?php

use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;

Route::get('/buku', [BukuController::class, 'index']);

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

Route::post('/buku/store', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{buku}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{buku}', [BukuController::class, 'update'])->name('buku.update');

Route::delete('/buku/{buku}', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/kategori', [KategoriController::class, 'index'])
    ->name('kategori.index');

    Route::get('/kategori/create', [KategoriController::class, 'create'])
    ->name('kategori.create');

Route::post('/kategori/store', [KategoriController::class, 'store'])
    ->name('kategori.store');

Route::get('/kategori/{kategori}/edit',
    [KategoriController::class, 'edit'])
    ->name('kategori.edit');

Route::put('/kategori/{kategori}',
    [KategoriController::class, 'update'])
    ->name('kategori.update');

    Route::delete('/kategori/{kategori}', [KategoriController::class, 'destroy'])
    ->name('kategori.destroy');

    Route::get('/kategori/{kategori}', [KategoriController::class, 'show'])->name('kategori.show');

Route::get('/supplier', [SupplierController::class, 'index'])
    ->name('supplier.index');

Route::get('/supplier/create', [SupplierController::class, 'create'])
    ->name('supplier.create');


Route::post('/supplier/store', [SupplierController::class, 'store'])
    ->name('supplier.store');

    Route::get(
    '/supplier/{supplier}/edit',
    [SupplierController::class, 'edit']
)->name('supplier.edit');

Route::put(
    '/supplier/{supplier}',
    [SupplierController::class, 'update']
)->name('supplier.update');

Route::delete(
    '/supplier/{supplier}',
    [SupplierController::class, 'destroy']
)->name('supplier.destroy');

Route::get(
    '/supplier/{supplier}',
    [SupplierController::class, 'show']
)->name('supplier.show');