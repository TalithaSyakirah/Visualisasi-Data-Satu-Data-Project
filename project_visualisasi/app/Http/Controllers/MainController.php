<?php

namespace App\Http\Controllers;

use App\Models\luaskecamatan;
use App\Models\jumlahpenduduk;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        $luaskecamatans = luaskecamatan::all();
        $jumlahpenduduks = jumlahpenduduk::all();

        return view('index', compact('luaskecamatans', 'jumlahpenduduks'));
    }
}
