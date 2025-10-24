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

use App\Http\Controllers\jumlahpendudukcontroller;

// // Halaman utama & CRUD
// Route::get('/', [jumlahPendudukController::class, 'index'])->name('jumlahpenduduk.index');

//tambah data 
Route::post('/jumlahpenduduk', [jumlahpendudukcontroller::class, 'store'])->name('jumlahpenduduk.store');

//hapus data
Route::delete('/jumlahpenduduk/{jumlahpenduduk}', [jumlahpendudukcontroller::class, 'destroy'])->name('jumlahpenduduk.destroy');

// form update
Route::get('/jumlahpenduduk/{jumlahpenduduk}/viewUpdate', [jumlahpendudukcontroller::class, 'viewUpdate'])->name('jumlahpenduduk.viewUpdate');

// simpan update
Route::put('/jumlahpenduduk/{jumlahpenduduk}', [jumlahpendudukcontroller::class, 'update'])->name('jumlahpenduduk.update');

//jumlah persentase miskin
use App\Http\Controllers\jumlahpersentasemiskincontroller;

// Jumlah Persentase Miskin
Route::post('/jumlahpersentasemiskin', [jumlahpersentasemiskincontroller::class, 'store'])->name('jumlahpersentasemiskin.store');

Route::delete('/jumlahpersentasemiskin/{jumlahpersentasemiskin}', [jumlahpersentasemiskincontroller::class, 'destroy'])->name('jumlahpersentasemiskin.destroy');

Route::get('/jumlahpersentasemiskin/{jumlahpersentasemiskin}/viewUpdate', [jumlahpersentasemiskincontroller::class, 'viewUpdate'])->name('jumlahpersentasemiskin.viewUpdate');

Route::put('/jumlahpersentasemiskin/{jumlahpersentasemiskin}', [jumlahpersentasemiskincontroller::class, 'update'])->name('jumlahpersentasemiskin.update');

//ipm menurut pembentuk 
use App\Http\Controllers\ipmmenurutpembentukcontroller;

// IPM Menurut Pembentuk
Route::post('/ipmmenurutpembentuk', [ipmmenurutpembentukcontroller::class, 'store'])->name('ipmmenurutpembentuk.store');

Route::delete('/ipmmenurutpembentuk/{ipmmenurutpembentuk}', [ipmmenurutpembentukcontroller::class, 'destroy'])->name('ipmmenurutpembentuk.destroy');

Route::get('/ipmmenurutpembentuk/{ipmmenurutpembentuk}/viewUpdate', [ipmmenurutpembentukcontroller::class, 'viewUpdate'])->name('ipmmenurutpembentuk.viewUpdate');

Route::put('/ipmmenurutpembentuk/{ipmmenurutpembentuk}', [ipmmenurutpembentukcontroller::class, 'update'])->name('ipmmenurutpembentuk.update');

// 📊 IPM Kabupaten/Kota
use App\Http\Controllers\ipmkabupatenkotacontroller;

Route::post('/ipmkabupatenkota', [ipmkabupatenkotacontroller::class, 'store'])->name('ipmkabupatenkota.store');

Route::delete('/ipmkabupatenkota/{ipmkabupatenkota}', [ipmkabupatenkotacontroller::class, 'destroy'])->name('ipmkabupatenkota.destroy');

Route::get('/ipmkabupatenkota/{ipmkabupatenkota}/viewUpdate', [ipmkabupatenkotacontroller::class, 'viewUpdate'])->name('ipmkabupatenkota.viewUpdate');

Route::put('/ipmkabupatenkota/{ipmkabupatenkota}', [ipmkabupatenkotacontroller::class, 'update'])->name('ipmkabupatenkota.update');


// 🧍‍♂️ Kondisi Ketenagakerjaan
use App\Http\Controllers\kondisiketenagakerjaancontroller;

Route::post('/kondisiketenagakerjaan', [kondisiketenagakerjaancontroller::class, 'store'])->name('kondisiketenagakerjaan.store');

Route::delete('/kondisiketenagakerjaan/{kondisiketenagakerjaan}', [kondisiketenagakerjaancontroller::class, 'destroy'])->name('kondisiketenagakerjaan.destroy');

Route::get('/kondisiketenagakerjaan/{kondisiketenagakerjaan}/viewUpdate', [kondisiketenagakerjaancontroller::class, 'viewUpdate'])->name('kondisiketenagakerjaan.viewUpdate');

Route::put('/kondisiketenagakerjaan/{kondisiketenagakerjaan}', [kondisiketenagakerjaancontroller::class, 'update'])->name('kondisiketenagakerjaan.update');

// 💼 Tingkat Pengangguran Terbuka
use App\Http\Controllers\tingkatpengangguranterbukacontroller;

Route::post('/tingkatpengangguranterbuka', [tingkatpengangguranterbukacontroller::class, 'store'])->name('tingkatpengangguranterbuka.store');

Route::delete('/tingkatpengangguranterbuka/{tingkatpengangguranterbuka}', [tingkatpengangguranterbukacontroller::class, 'destroy'])->name('tingkatpengangguranterbuka.destroy');

Route::get('/tingkatpengangguranterbuka/{tingkatpengangguranterbuka}/viewUpdate', [tingkatpengangguranterbukacontroller::class, 'viewUpdate'])->name('tingkatpengangguranterbuka.viewUpdate');

Route::put('/tingkatpengangguranterbuka/{tingkatpengangguranterbuka}', [tingkatpengangguranterbukacontroller::class, 'update'])->name('tingkatpengangguranterbuka.update');

// 👷‍♂️ Bekerja Menurut Lapangan Usaha
use App\Http\Controllers\bekerjamenurutlapanganusahacontroller;

Route::post('/bekerjamenurutlapanganusaha', [bekerjamenurutlapanganusahacontroller::class, 'store'])->name('bekerjamenurutlapanganusaha.store');

Route::delete('/bekerjamenurutlapanganusaha/{bekerjamenurutlapanganusaha}', [bekerjamenurutlapanganusahacontroller::class, 'destroy'])->name('bekerjamenurutlapanganusaha.destroy');

Route::get('/bekerjamenurutlapanganusaha/{bekerjamenurutlapanganusaha}/viewUpdate', [bekerjamenurutlapanganusahacontroller::class, 'viewUpdate'])->name('bekerjamenurutlapanganusaha.viewUpdate');

Route::put('/bekerjamenurutlapanganusaha/{bekerjamenurutlapanganusaha}', [bekerjamenurutlapanganusahacontroller::class, 'update'])->name('bekerjamenurutlapanganusaha.update');

// PDRB Harga Berlaku Kategori
use App\Http\Controllers\pdrbhargaberlakukategoricontroller;


// tambah data
Route::post('/pdrbhargaberlakukategori', [pdrbhargaberlakukategoricontroller::class, 'store'])->name('pdrbhargaberlakukategori.store');

// hapus data
Route::delete('/pdrbhargaberlakukategori/{pdrbhargaberlakukategori}', [pdrbhargaberlakukategoricontroller::class, 'destroy'])->name('pdrbhargaberlakukategori.destroy');

// form update
Route::get('/pdrbhargaberlakukategori/{pdrbhargaberlakukategori}/viewUpdate', [pdrbhargaberlakukategoricontroller::class, 'viewUpdate'])->name('pdrbhargaberlakukategori.viewUpdate');

// simpan update
Route::put('/pdrbhargaberlakukategori/{pdrbhargaberlakukategori}', [pdrbhargaberlakukategoricontroller::class, 'update'])->name('pdrbhargaberlakukategori.update');

// 📈 Pertumbuhan Nilai Tambah Kategori
use App\Http\Controllers\PertumbuhanNilaiTambahKategoriController;

Route::post('/pertumbuhannilaitambahkategori', [PertumbuhanNilaiTambahKategoriController::class, 'store'])->name('pertumbuhannilaitambahkategori.store');

Route::delete('/pertumbuhannilaitambahkategori/{pertumbuhannilaitambahkategori}', [PertumbuhanNilaiTambahKategoriController::class, 'destroy'])->name('pertumbuhannilaitambahkategori.destroy');

Route::get('/pertumbuhannilaitambahkategori/{pertumbuhannilaitambahkategori}/viewUpdate', [PertumbuhanNilaiTambahKategoriController::class, 'viewUpdate'])->name('pertumbuhannilaitambahkategori.viewUpdate');

Route::put('/pertumbuhannilaitambahkategori/{pertumbuhannilaitambahkategori}', [PertumbuhanNilaiTambahKategoriController::class, 'update'])->name('pertumbuhannilaitambahkategori.update');

use App\Http\Controllers\VisualisasiController;

Route::get('/visualisasi', [VisualisasiController::class, 'index'])->name('visualisasi.index');

