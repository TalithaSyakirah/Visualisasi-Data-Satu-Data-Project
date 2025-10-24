<?php

namespace App\Http\Controllers;

use App\Models\luaskecamatan;
use App\Models\jumlahpenduduk;
use App\Models\jumlahpersentasemiskin;
use App\Models\ipmmenurutpembentuk;
use App\Models\ipmkabupatenkota;
use App\Models\kondisiketenagakerjaan;
use App\Models\tingkatpengangguranterbuka;
use App\Models\bekerjamenurutlapanganusaha;
use App\Models\pdrbhargaberlakukategori;
use App\Models\pertumbuhannilaitambahkategori;
use Illuminate\View\View;

class visualisasicontroller extends Controller
{
    public function index(): View
    {
        $luaskecamatans = luaskecamatan::all();
        $jumlahpenduduks = jumlahpenduduk::all();
        $jumlahpersentasemiskins = jumlahpersentasemiskin::all();
        $ipmmenurutpembentuks = ipmmenurutpembentuk::all();
        $ipmkabupatenkotas = ipmkabupatenkota::all();
        $kondisiketenagakerjaans = kondisiketenagakerjaan::all();
        $tingkatpengangguranterbukas = tingkatpengangguranterbuka::all();
        $bekerjamenurutlapanganusahas = bekerjamenurutlapanganusaha::all();
        $pdrbhargaberlakukategoris = pdrbhargaberlakukategori::all();
        $pertumbuhannilaitambahkategoris = pertumbuhannilaitambahkategori::all();

        return view('index', compact(
            'luaskecamatans', 
            'jumlahpenduduks', 
            'jumlahpersentasemiskins', 
            'ipmmenurutpembentuks', 
            'ipmkabupatenkotas', 
            'kondisiketenagakerjaans', 
            'tingkatpengangguranterbukas',
            'bekerjamenurutlapanganusahas',
            'pdrbhargaberlakukategoris',
            'pertumbuhannilaitambahkategoris'
        ));
    }
}
