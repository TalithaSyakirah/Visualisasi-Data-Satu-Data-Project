<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\luaskecamatan;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View; 

class luaskecamatancontroller extends Controller
{
    // Tampilkan semua data
    public function index(): View{
        $luaskecamatans = luaskecamatan::all();
        return view('index', ['luaskecamatans'=>$luaskecamatans]);
    }

    // Simpan data baru
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'kecamatan' => 'required|max:100',
            'luaskm2' => 'required|integer',
        ]);

        luaskecamatan::create([
            'kecamatan' => $request->kecamatan,
            'luaskm2' => $request->luaskm2,
        ]);

        return redirect()->route('luaskecamatan.index');
    }

    // Hapus data
    public function destroy(luaskecamatan $luaskecamatan): RedirectResponse
    {
        $luaskecamatan->delete();
        return redirect()->route('luaskecamatan.index');
    }

    // Tampilkan form edit/update
    public function viewUpdate(luaskecamatan $luaskecamatan): View
    {
        return view('update.viewUpdate_luaskecamatan', ['luaskecamatan' => $luaskecamatan]);
    }

    // Update data
    public function update(Request $request, luaskecamatan $luaskecamatan): RedirectResponse
    {
        $request->validate([
            'kecamatan' => 'required|max:100',
            'luaskm2' => 'required|integer',
        ]);

        $luaskecamatan->update([
            'kecamatan' => $request->kecamatan,
            'luaskm2' => $request->luaskm2,
        ]);

        return redirect()->route('luaskecamatan.index');
    }
}
