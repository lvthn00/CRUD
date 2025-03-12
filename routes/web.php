<?php

use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::POST('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::PUT('/barang/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::get('/barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::delete('/barang/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');