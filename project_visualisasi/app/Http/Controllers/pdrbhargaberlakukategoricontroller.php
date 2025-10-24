<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pdrbhargaberlakukategori;

class pdrbhargaberlakukategoricontroller extends Controller
{
    // SIMPAN DATA BARU
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tahun' => 'required|integer',
            'pertanian_perikanan' => 'required|numeric',
            'pertambangan_penggalian' => 'required|numeric',
            'industri_pengolahan' => 'required|numeric',
            'listrik_gas' => 'required|numeric',
            'air_sampah' => 'required|numeric',
            'konstruksi' => 'required|numeric',
            'perdagangan_reparasi' => 'required|numeric',
            'transportasi_pergudangan' => 'required|numeric',
            'akomodasi_makanan' => 'required|numeric',
            'informasi_komunikasi' => 'required|numeric',
            'jasa_keuangan_asuransi' => 'required|numeric',
            'real_estate' => 'required|numeric',
            'jasa_perusahaan' => 'required|numeric',
            'administrasi_sosial' => 'required|numeric',
            'jasa_pendidikan' => 'required|numeric',
            'jasa_kesehatan_sosial' => 'required|numeric',
            'jasa_lainnya' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        pdrbhargaberlakukategori::create($validated);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil ditambahkan!');
    }

    // FORM UPDATE
    public function viewUpdate($id)
    {
        $pdrbhargaberlakukategori = pdrbhargaberlakukategori::findOrFail($id);
        return view('update.viewUpdate_pdrbhargaberlakukategori', ['pdrbhargaberlakukategori' => $pdrbhargaberlakukategori]);
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tahun' => 'required|integer',
            'pertanian_perikanan' => 'required|numeric',
            'pertambangan_penggalian' => 'required|numeric',
            'industri_pengolahan' => 'required|numeric',
            'listrik_gas' => 'required|numeric',
            'air_sampah' => 'required|numeric',
            'konstruksi' => 'required|numeric',
            'perdagangan_reparasi' => 'required|numeric',
            'transportasi_pergudangan' => 'required|numeric',
            'akomodasi_makanan' => 'required|numeric',
            'informasi_komunikasi' => 'required|numeric',
            'jasa_keuangan_asuransi' => 'required|numeric',
            'real_estate' => 'required|numeric',
            'jasa_perusahaan' => 'required|numeric',
            'administrasi_sosial' => 'required|numeric',
            'jasa_pendidikan' => 'required|numeric',
            'jasa_kesehatan_sosial' => 'required|numeric',
            'jasa_lainnya' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        $pdrb = pdrbhargaberlakukategori::findOrFail($id);
        $pdrb->update($validated);

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil diperbarui!');
    }

    // HAPUS DATA
    public function destroy($id)
    {
        $pdrb = pdrbhargaberlakukategori::findOrFail($id);
        $pdrb->delete();

        return redirect()->route('dashboard.index')->with('success', 'Data berhasil dihapus!');
    }
}
