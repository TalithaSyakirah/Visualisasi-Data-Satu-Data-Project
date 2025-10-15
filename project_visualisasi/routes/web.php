<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\luaskecamatancontroller;

Route::get('/welcome', function () {
    return view('welcome');
});

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('dashboard.index');


//Luas Kecamatan

// // route utama: tampil data
// Route::get('/', [luaskecamatanController::class, 'index'])->name('luaskecamatan.index');

// tambah data
Route::post('/luaskecamatan', [luaskecamatanController::class, 'store'])->name('luaskecamatan.store');

// hapus data
Route::delete('/luaskecamatan/{luaskecamatan}', [luaskecamatanController::class, 'destroy'])->name('luaskecamatan.destroy');

// form update
Route::get('/luaskecamatan/{luaskecamatan}/viewUpdate', [luaskecamatanController::class, 'viewUpdate'])->name('luaskecamatan.viewUpdate');

// simpan update
Route::put('/luaskecamatan/{luaskecamatan}', [luaskecamatanController::class, 'update'])->name('luaskecamatan.update');

//Jumlah Penduduk 

use App\Http\Controllers\jumlahPendudukController;

// // Halaman utama & CRUD
// Route::get('/', [jumlahPendudukController::class, 'index'])->name('jumlahpenduduk.index');

//tambah data 
Route::post('/jumlahpenduduk', [jumlahPendudukController::class, 'store'])->name('jumlahpenduduk.store');

//hapus data
Route::delete('/jumlahpenduduk/{jumlahpenduduk}', [jumlahPendudukController::class, 'destroy'])->name('jumlahpenduduk.destroy');

// form update
Route::get('/jumlahpenduduk/{jumlahpenduduk}/viewUpdate', [jumlahPendudukController::class, 'viewUpdate'])->name('jumlahpenduduk.viewUpdate');

// simpan update
Route::put('/jumlahpenduduk/{jumlahpenduduk}', [jumlahPendudukController::class, 'update'])->name('jumlahpenduduk.update');
