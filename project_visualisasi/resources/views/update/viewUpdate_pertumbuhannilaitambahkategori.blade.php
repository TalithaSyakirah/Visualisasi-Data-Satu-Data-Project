@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-10">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-info text-white">
        <h4 class="mb-0">✏ Edit Data Pertumbuhan Nilai Tambah Menurut Kategori</h4>
      </div>
      <div class="card-body">
        {{-- Pastikan variabel $pertumbuhannilaitambahkategori sudah tersedia dari Controller --}}
        <form action="{{ route('pertumbuhannilaitambahkategori.update', $pertumbuhannilaitambahkategori->id) }}" method="POST">
          @csrf
          @method('PUT')

          {{-- Tahun --}}
          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input 
              type="number" 
              name="tahun" 
              id="tahun" 
              class="form-control" 
              value="{{ old('tahun', $pertumbuhannilaitambahkategori->tahun) }}" 
              required
            >
          </div>

          <div class="row g-3">
            {{-- Pertanian, Kehutanan & Perikanan --}}
            <div class="col-md-4">
              <label for="pertanian_kehutanan_perikanan" class="form-label">Pertanian, Kehutanan & Perikanan</label>
              <input 
                type="number" step="0.01"
                name="pertanian_kehutanan_perikanan"
                id="pertanian_kehutanan_perikanan"
                class="form-control"
                value="{{ old('pertanian_kehutanan_perikanan', $pertumbuhannilaitambahkategori->pertanian_kehutanan_perikanan) }}"
                required
              >
            </div>

            {{-- Pertambangan & Penggalian --}}
            <div class="col-md-4">
              <label for="pertambangan_penggalian" class="form-label">Pertambangan & Penggalian</label>
              <input 
                type="number" step="0.01"
                name="pertambangan_penggalian"
                id="pertambangan_penggalian"
                class="form-control"
                value="{{ old('pertambangan_penggalian', $pertumbuhannilaitambahkategori->pertambangan_penggalian) }}"
                required
              >
            </div>

            {{-- Industri Pengolahan --}}
            <div class="col-md-4">
              <label for="industri_pengolahan" class="form-label">Industri Pengolahan</label>
              <input 
                type="number" step="0.01"
                name="industri_pengolahan"
                id="industri_pengolahan"
                class="form-control"
                value="{{ old('industri_pengolahan', $pertumbuhannilaitambahkategori->industri_pengolahan) }}"
                required
              >
            </div>

            {{-- Pengadaan Listrik & Gas --}}
            <div class="col-md-4">
              <label for="pengadaan_listrik_gas" class="form-label">Pengadaan Listrik & Gas</label>
              <input 
                type="number" step="0.01"
                name="pengadaan_listrik_gas"
                id="pengadaan_listrik_gas"
                class="form-control"
                value="{{ old('pengadaan_listrik_gas', $pertumbuhannilaitambahkategori->pengadaan_listrik_gas) }}"
                required
              >
            </div>

            {{-- Pengadaan Air & Sampah --}}
            <div class="col-md-4">
              <label for="pengadaan_air_sampah" class="form-label">Pengadaan Air & Pengelolaan Sampah</label>
              <input 
                type="number" step="0.01"
                name="pengadaan_air_sampah"
                id="pengadaan_air_sampah"
                class="form-control"
                value="{{ old('pengadaan_air_sampah', $pertumbuhannilaitambahkategori->pengadaan_air_sampah) }}"
                required
              >
            </div>

            {{-- Konstruksi --}}
            <div class="col-md-4">
              <label for="konstruksi" class="form-label">Konstruksi</label>
              <input 
                type="number" step="0.01"
                name="konstruksi"
                id="konstruksi"
                class="form-control"
                value="{{ old('konstruksi', $pertumbuhannilaitambahkategori->konstruksi) }}"
                required
              >
            </div>

            {{-- Perdagangan & Reparasi Motor --}}
            <div class="col-md-4">
              <label for="perdagangan_reparasi_motor" class="form-label">Perdagangan & Reparasi Motor</label>
              <input 
                type="number" step="0.01"
                name="perdagangan_reparasi_motor"
                id="perdagangan_reparasi_motor"
                class="form-control"
                value="{{ old('perdagangan_reparasi_motor', $pertumbuhannilaitambahkategori->perdagangan_reparasi_motor) }}"
                required
              >
            </div>

            {{-- Transportasi & Pergudangan --}}
            <div class="col-md-4">
              <label for="transportasi_pergudangan" class="form-label">Transportasi & Pergudangan</label>
              <input 
                type="number" step="0.01"
                name="transportasi_pergudangan"
                id="transportasi_pergudangan"
                class="form-control"
                value="{{ old('transportasi_pergudangan', $pertumbuhannilaitambahkategori->transportasi_pergudangan) }}"
                required
              >
            </div>

            {{-- Akomodasi & Makan Minum --}}
            <div class="col-md-4">
              <label for="akomodasi_makan_minum" class="form-label">Akomodasi & Makan Minum</label>
              <input 
                type="number" step="0.01"
                name="akomodasi_makan_minum"
                id="akomodasi_makan_minum"
                class="form-control"
                value="{{ old('akomodasi_makan_minum', $pertumbuhannilaitambahkategori->akomodasi_makan_minum) }}"
                required
              >
            </div>

            {{-- Informasi & Komunikasi --}}
            <div class="col-md-4">
              <label for="informasi_komunikasi" class="form-label">Informasi & Komunikasi</label>
              <input 
                type="number" step="0.01"
                name="informasi_komunikasi"
                id="informasi_komunikasi"
                class="form-control"
                value="{{ old('informasi_komunikasi', $pertumbuhannilaitambahkategori->informasi_komunikasi) }}"
                required
              >
            </div>

            {{-- Jasa Keuangan & Asuransi --}}
            <div class="col-md-4">
              <label for="jasa_keuangan_asuransi" class="form-label">Jasa Keuangan & Asuransi</label>
              <input 
                type="number" step="0.01"
                name="jasa_keuangan_asuransi"
                id="jasa_keuangan_asuransi"
                class="form-control"
                value="{{ old('jasa_keuangan_asuransi', $pertumbuhannilaitambahkategori->jasa_keuangan_asuransi) }}"
                required
              >
            </div>

            {{-- Real Estat --}}
            <div class="col-md-4">
              <label for="real_estat" class="form-label">Real Estat</label>
              <input 
                type="number" step="0.01"
                name="real_estat"
                id="real_estat"
                class="form-control"
                value="{{ old('real_estat', $pertumbuhannilaitambahkategori->real_estat) }}"
                required
              >
            </div>

            {{-- Jasa Perusahaan --}}
            <div class="col-md-4">
              <label for="jasa_perusahaan" class="form-label">Jasa Perusahaan</label>
              <input 
                type="number" step="0.01"
                name="jasa_perusahaan"
                id="jasa_perusahaan"
                class="form-control"
                value="{{ old('jasa_perusahaan', $pertumbuhannilaitambahkategori->jasa_perusahaan) }}"
                required
              >
            </div>

            {{-- Administrasi & Jaminan Sosial --}}
            <div class="col-md-4">
              <label for="administrasi_sosial_wajib" class="form-label">Administrasi & Jaminan Sosial</label>
              <input 
                type="number" step="0.01"
                name="administrasi_sosial_wajib"
                id="administrasi_sosial_wajib"
                class="form-control"
                value="{{ old('administrasi_sosial_wajib', $pertumbuhannilaitambahkategori->administrasi_sosial_wajib) }}"
                required
              >
            </div>

            {{-- Jasa Pendidikan --}}
            <div class="col-md-4">
              <label for="jasa_pendidikan" class="form-label">Jasa Pendidikan</label>
              <input 
                type="number" step="0.01"
                name="jasa_pendidikan"
                id="jasa_pendidikan"
                class="form-control"
                value="{{ old('jasa_pendidikan', $pertumbuhannilaitambahkategori->jasa_pendidikan) }}"
                required
              >
            </div>

            {{-- Jasa Kesehatan & Sosial --}}
            <div class="col-md-4">
              <label for="jasa_kesehatan_sosial" class="form-label">Jasa Kesehatan & Sosial</label>
              <input 
                type="number" step="0.01"
                name="jasa_kesehatan_sosial"
                id="jasa_kesehatan_sosial"
                class="form-control"
                value="{{ old('jasa_kesehatan_sosial', $pertumbuhannilaitambahkategori->jasa_kesehatan_sosial) }}"
                required
              >
            </div>

            {{-- Jasa Lainnya --}}
            <div class="col-md-4">
              <label for="jasa_lainnya" class="form-label">Jasa Lainnya</label>
              <input 
                type="number" step="0.01"
                name="jasa_lainnya"
                id="jasa_lainnya"
                class="form-control"
                value="{{ old('jasa_lainnya', $pertumbuhannilaitambahkategori->jasa_lainnya) }}"
                required
              >
            </div>
            
            {{-- Jumlah Total --}}
            <div class="col-md-4">
              <label for="jumlah" class="form-label">Jumlah Total</label>
              <input 
                type="number" step="0.01"
                name="jumlah"
                id="jumlah"
                class="form-control"
                value="{{ old('jumlah', $pertumbuhannilaitambahkategori->jumlah) }}"
                required
              >
            </div>
          </div>

          <div class="d-flex mt-4">
            <button type="submit" class="btn btn-success me-2">Update Data</button>
            <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Cancel</a> 
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
