<?php

namespace App\Http\Controllers;

use App\Models\PertumbuhanNilaiTambahKategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PertumbuhanNilaiTambahKategoriController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'pertanian_kehutanan_perikanan' => 'required|numeric',
            'pertambangan_penggalian' => 'required|numeric',
            'industri_pengolahan' => 'required|numeric',
            'pengadaan_listrik_gas' => 'required|numeric',
            'pengadaan_air_sampah' => 'required|numeric',
            'konstruksi' => 'required|numeric',
            'perdagangan_reparasi_motor' => 'required|numeric',
            'transportasi_pergudangan' => 'required|numeric',
            'akomodasi_makan_minum' => 'required|numeric',
            'informasi_komunikasi' => 'required|numeric',
            'jasa_keuangan_asuransi' => 'required|numeric',
            'real_estat' => 'required|numeric',
            'jasa_perusahaan' => 'required|numeric',
            'administrasi_sosial_wajib' => 'required|numeric',
            'jasa_pendidikan' => 'required|numeric',
            'jasa_kesehatan_sosial' => 'required|numeric',
            'jasa_lainnya' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        PertumbuhanNilaiTambahKategori::create($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data Pertumbuhan Nilai Tambah berhasil ditambahkan.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function viewUpdate(PertumbuhanNilaiTambahKategori $pertumbuhannilaitambahkategori): View
    {
        return view('update.viewUpdate_pertumbuhannilaitambahkategori', compact('pertumbuhannilaitambahkategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PertumbuhanNilaiTambahKategori $pertumbuhannilaitambahkategori): RedirectResponse
    {
        $request->validate([
            'tahun' => 'required|integer',
            'pertanian_kehutanan_perikanan' => 'required|numeric',
            'pertambangan_penggalian' => 'required|numeric',
            'industri_pengolahan' => 'required|numeric',
            'pengadaan_listrik_gas' => 'required|numeric',
            'pengadaan_air_sampah' => 'required|numeric',
            'konstruksi' => 'required|numeric',
            'perdagangan_reparasi_motor' => 'required|numeric',
            'transportasi_pergudangan' => 'required|numeric',
            'akomodasi_makan_minum' => 'required|numeric',
            'informasi_komunikasi' => 'required|numeric',
            'jasa_keuangan_asuransi' => 'required|numeric',
            'real_estat' => 'required|numeric',
            'jasa_perusahaan' => 'required|numeric',
            'administrasi_sosial_wajib' => 'required|numeric',
            'jasa_pendidikan' => 'required|numeric',
            'jasa_kesehatan_sosial' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);

        $pertumbuhannilaitambahkategori->update($request->all());

        return redirect()->route('dashboard.index')->with('success', 'Data Pertumbuhan Nilai Tambah berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PertumbuhanNilaiTambahKategori $pertumbuhannilaitambahkategori): RedirectResponse
    {
        $pertumbuhannilaitambahkategori->delete();

        return redirect()->route('dashboard.index')->with('success', 'Data Pertumbuhan Nilai Tambah berhasil dihapus.');
    }
}
