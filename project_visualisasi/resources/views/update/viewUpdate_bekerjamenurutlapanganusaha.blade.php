@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-10">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-info text-white">
        <h4 class="mb-0">✏ Edit Data Bekerja Menurut Lapangan Usaha</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('bekerjamenurutlapanganusaha.update', $bekerjamenurutlapanganusaha->id) }}" method="POST">
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
              value="{{ old('tahun', $bekerjamenurutlapanganusaha->tahun) }}" 
              required
            >
          </div>

          <div class="row g-3">
            <div class="col-md-4">
              <label for="pertanian_kehutanan_perikanan" class="form-label">Pertanian, Kehutanan & Perikanan</label>
              <input 
                type="number" step="0.01"
                name="pertanian_kehutanan_perikanan"
                id="pertanian_kehutanan_perikanan"
                class="form-control"
                value="{{ old('pertanian_kehutanan_perikanan', $bekerjamenurutlapanganusaha->pertanian_kehutanan_perikanan) }}"
                required
              >
            </div>

            <div class="col-md-4">
              <label for="pertambangan_penggalian" class="form-label">Pertambangan & Penggalian</label>
              <input 
                type="number" step="0.01"
                name="pertambangan_penggalian"
                id="pertambangan_penggalian"
                class="form-control"
                value="{{ old('pertambangan_penggalian', $bekerjamenurutlapanganusaha->pertambangan_penggalian) }}"
                required
              >
            </div>

            <div class="col-md-4">
              <label for="industri" class="form-label">Industri</label>
              <input 
                type="number" step="0.01"
                name="industri"
                id="industri"
                class="form-control"
                value="{{ old('industri', $bekerjamenurutlapanganusaha->industri) }}"
                required
              >
            </div>

            <div class="col-md-4">
              <label for="listrik_gas_air" class="form-label">Listrik, Gas & Air</label>
              <input 
                type="number" step="0.01"
                name="listrik_gas_air"
                id="listrik_gas_air"
                class="form-control"
                value="{{ old('listrik_gas_air', $bekerjamenurutlapanganusaha->listrik_gas_air) }}"
                required
              >
            </div>

            <div class="col-md-4">
              <label for="konstruksi" class="form-label">Konstruksi</label>
              <input 
                type="number" step="0.01"
                name="konstruksi"
                id="konstruksi"
                class="form-control"
                value="{{ old('konstruksi', $bekerjamenurutlapanganusaha->konstruksi) }}"
                required
              >
            </div>

            <div class="col-md-4">
              <label for="perdagangan_akomodasi" class="form-label">Perdagangan & Akomodasi</label>
              <input 
                type="number" step="0.01"
                name="perdagangan_akomodasi"
                id="perdagangan_akomodasi"
                class="form-control"
                value="{{ old('perdagangan_akomodasi', $bekerjamenurutlapanganusaha->perdagangan_akomodasi) }}"
                required
              >
            </div>

            <div class="col-md-4">
              <label for="transportasi_komunikasi" class="form-label">Transportasi & Komunikasi</label>
              <input 
                type="number" step="0.01"
                name="transportasi_komunikasi"
                id="transportasi_komunikasi"
                class="form-control"
                value="{{ old('transportasi_komunikasi', $bekerjamenurutlapanganusaha->transportasi_komunikasi) }}"
                required
              >
            </div>

            <div class="col-md-4">
              <label for="keuangan_real_estate" class="form-label">Keuangan & Real Estate</label>
              <input 
                type="number" step="0.01"
                name="keuangan_real_estate"
                id="keuangan_real_estate"
                class="form-control"
                value="{{ old('keuangan_real_estate', $bekerjamenurutlapanganusaha->keuangan_real_estate) }}"
                required
              >
            </div>

            <div class="col-md-4">
              <label for="jasa_kemasyarakatan_lainnya" class="form-label">Jasa Kemasyarakatan & Lainnya</label>
              <input 
                type="number" step="0.01"
                name="jasa_kemasyarakatan_lainnya"
                id="jasa_kemasyarakatan_lainnya"
                class="form-control"
                value="{{ old('jasa_kemasyarakatan_lainnya', $bekerjamenurutlapanganusaha->jasa_kemasyarakatan_lainnya) }}"
                required
              >
            </div>

            <div class="col-md-4">
              <label for="jumlah" class="form-label">Jumlah Total</label>
              <input 
                type="number" step="0.01"
                name="jumlah"
                id="jumlah"
                class="form-control"
                value="{{ old('jumlah', $bekerjamenurutlapanganusaha->jumlah) }}"
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
