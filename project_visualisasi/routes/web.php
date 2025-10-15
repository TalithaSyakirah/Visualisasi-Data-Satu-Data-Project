<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\luaskecamatancontroller;

Route::get('/welcome', function () {
    return view('welcome');
});

//Luas Kecamatan

// route utama: tampil data
Route::get('/', [luaskecamatanController::class, 'index'])->name('luaskecamatan.index');

// tambah data
Route::post('/luaskecamatan', [luaskecamatanController::class, 'store'])->name('luaskecamatan.store');

// hapus data
Route::delete('/luaskecamatan/{luaskecamatan}', [luaskecamatanController::class, 'destroy'])->name('luaskecamatan.destroy');

// form update
Route::get('/luaskecamatan/{luaskecamatan}/viewUpdate', [luaskecamatanController::class, 'viewUpdate'])->name('luaskecamatan.viewUpdate');

// simpan update
Route::put('/luaskecamatan/{luaskecamatan}', [luaskecamatanController::class, 'update'])->name('luaskecamatan.update');

//Jumlah Penduduk 

use App\Http\Controllers\JumlahPendudukController;

// Halaman utama & CRUD
Route::get('/jumlahpenduduk', [JumlahPendudukController::class, 'index'])->name('jumlahpenduduk.index');

//tambah data 
Route::post('/jumlahpenduduk', [JumlahPendudukController::class, 'store'])->name('jumlahpenduduk.store');

//hapus data
Route::delete('/jumlahpenduduk/{jumlahpenduduk}', [JumlahPendudukController::class, 'destroy'])->name('jumlahpenduduk.destroy');

// form update
Route::get('/jumlahpenduduk/{jumlahpenduduk}/edit', [JumlahPendudukController::class, 'viewUpdate'])->name('jumlahpenduduk.viewUpdate');

// simpan update
Route::put('/jumlahpenduduk/{jumlahpenduduk}', [JumlahPendudukController::class, 'update'])->name('jumlahpenduduk.update');
