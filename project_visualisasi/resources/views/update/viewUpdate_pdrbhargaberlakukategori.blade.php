@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-10">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-info text-white">
        <h4 class="mb-0">✏ Edit Data PDRB Harga Berlaku Berdasarkan Kategori</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('pdrbhargaberlakukategori.update', $pdrbhargaberlakukategori->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="row">
            <!-- Tahun -->
            <div class="col-md-6 mb-3">
              <label for="tahun" class="form-label">Tahun</label>
              <input type="number" name="tahun" id="tahun" class="form-control" value="{{ old('tahun', $pdrbhargaberlakukategori->tahun) }}" required>
            </div>

            <!-- Pertanian, Kehutanan, dan Perikanan -->
            <div class="col-md-6 mb-3">
              <label for="pertanian_perikanan" class="form-label">Pertanian, Kehutanan & Perikanan</label>
              <input type="number" step="0.01" name="pertanian_perikanan" id="pertanian_perikanan" class="form-control" value="{{ old('pertanian_perikanan', $pdrbhargaberlakukategori->pertanian_perikanan) }}" required>
            </div>

            <!-- Pertambangan dan Penggalian -->
            <div class="col-md-6 mb-3">
              <label for="pertambangan_penggalian" class="form-label">Pertambangan & Penggalian</label>
              <input type="number" step="0.01" name="pertambangan_penggalian" id="pertambangan_penggalian" class="form-control" value="{{ old('pertambangan_penggalian', $pdrbhargaberlakukategori->pertambangan_penggalian) }}" required>
            </div>

            <!-- Industri Pengolahan -->
            <div class="col-md-6 mb-3">
              <label for="industri_pengolahan" class="form-label">Industri Pengolahan</label>
              <input type="number" step="0.01" name="industri_pengolahan" id="industri_pengolahan" class="form-control" value="{{ old('industri_pengolahan', $pdrbhargaberlakukategori->industri_pengolahan) }}" required>
            </div>

            <!-- Pengadaan Listrik dan Gas -->
            <div class="col-md-6 mb-3">
              <label for="listrik_gas" class="form-label">Pengadaan Listrik & Gas</label>
              <input type="number" step="0.01" name="listrik_gas" id="listrik_gas" class="form-control" value="{{ old('listrik_gas', $pdrbhargaberlakukategori->listrik_gas) }}" required>
            </div>

            <!-- Pengadaan Air, Sampah & Daur Ulang -->
            <div class="col-md-6 mb-3">
              <label for="air_sampah" class="form-label">Pengadaan Air, Sampah & Daur Ulang</label>
              <input type="number" step="0.01" name="air_sampah" id="air_sampah" class="form-control" value="{{ old('air_sampah', $pdrbhargaberlakukategori->air_sampah) }}" required>
            </div>

            <!-- Konstruksi -->
            <div class="col-md-6 mb-3">
              <label for="konstruksi" class="form-label">Konstruksi</label>
              <input type="number" step="0.01" name="konstruksi" id="konstruksi" class="form-control" value="{{ old('konstruksi', $pdrbhargaberlakukategori->konstruksi) }}" required>
            </div>

            <!-- Perdagangan Besar & Reparasi -->
            <div class="col-md-6 mb-3">
              <label for="perdagangan_reparasi" class="form-label">Perdagangan Besar & Reparasi</label>
              <input type="number" step="0.01" name="perdagangan_reparasi" id="perdagangan_reparasi" class="form-control" value="{{ old('perdagangan_reparasi', $pdrbhargaberlakukategori->perdagangan_reparasi) }}" required>
            </div>

            <!-- Transportasi & Pergudangan -->
            <div class="col-md-6 mb-3">
              <label for="transportasi_pergudangan" class="form-label">Transportasi & Pergudangan</label>
              <input type="number" step="0.01" name="transportasi_pergudangan" id="transportasi_pergudangan" class="form-control" value="{{ old('transportasi_pergudangan', $pdrbhargaberlakukategori->transportasi_pergudangan) }}" required>
            </div>

            <!-- Akomodasi & Makanan Minuman -->
            <div class="col-md-6 mb-3">
              <label for="akomodasi_makanan" class="form-label">Akomodasi & Makanan Minuman</label>
              <input type="number" step="0.01" name="akomodasi_makanan" id="akomodasi_makanan" class="form-control" value="{{ old('akomodasi_makanan', $pdrbhargaberlakukategori->akomodasi_makanan) }}" required>
            </div>

            <!-- Informasi & Komunikasi -->
            <div class="col-md-6 mb-3">
              <label for="informasi_komunikasi" class="form-label">Informasi & Komunikasi</label>
              <input type="number" step="0.01" name="informasi_komunikasi" id="informasi_komunikasi" class="form-control" value="{{ old('informasi_komunikasi', $pdrbhargaberlakukategori->informasi_komunikasi) }}" required>
            </div>

            <!-- Jasa Keuangan & Asuransi -->
            <div class="col-md-6 mb-3">
              <label for="jasa_keuangan_asuransi" class="form-label">Jasa Keuangan & Asuransi</label>
              <input type="number" step="0.01" name="jasa_keuangan_asuransi" id="jasa_keuangan_asuransi" class="form-control" value="{{ old('jasa_keuangan_asuransi', $pdrbhargaberlakukategori->jasa_keuangan_asuransi) }}" required>
            </div>

            <!-- Real Estate -->
            <div class="col-md-6 mb-3">
              <label for="real_estate" class="form-label">Real Estate</label>
              <input type="number" step="0.01" name="real_estate" id="real_estate" class="form-control" value="{{ old('real_estate', $pdrbhargaberlakukategori->real_estate) }}" required>
            </div>

            <!-- Jasa Perusahaan -->
            <div class="col-md-6 mb-3">
              <label for="jasa_perusahaan" class="form-label">Jasa Perusahaan</label>
              <input type="number" step="0.01" name="jasa_perusahaan" id="jasa_perusahaan" class="form-control" value="{{ old('jasa_perusahaan', $pdrbhargaberlakukategori->jasa_perusahaan) }}" required>
            </div>

            <!-- Administrasi Pemerintahan & Jaminan Sosial -->
            <div class="col-md-6 mb-3">
              <label for="administrasi_sosial" class="form-label">Administrasi Pemerintahan & Jaminan Sosial</label>
              <input type="number" step="0.01" name="administrasi_sosial" id="administrasi_sosial" class="form-control" value="{{ old('administrasi_sosial', $pdrbhargaberlakukategori->administrasi_sosial) }}" required>
            </div>

            <!-- Jasa Pendidikan -->
            <div class="col-md-6 mb-3">
              <label for="jasa_pendidikan" class="form-label">Jasa Pendidikan</label>
              <input type="number" step="0.01" name="jasa_pendidikan" id="jasa_pendidikan" class="form-control" value="{{ old('jasa_pendidikan', $pdrbhargaberlakukategori->jasa_pendidikan) }}" required>
            </div>

            <!-- Jasa Kesehatan & Sosial -->
            <div class="col-md-6 mb-3">
              <label for="jasa_kesehatan_sosial" class="form-label">Jasa Kesehatan & Sosial</label>
              <input type="number" step="0.01" name="jasa_kesehatan_sosial" id="jasa_kesehatan_sosial" class="form-control" value="{{ old('jasa_kesehatan_sosial', $pdrbhargaberlakukategori->jasa_kesehatan_sosial) }}" required>
            </div>

            <!-- Jasa Lainnya -->
            <div class="col-md-6 mb-3">
              <label for="jasa_lainnya" class="form-label">Jasa Lainnya</label>
              <input type="number" step="0.01" name="jasa_lainnya" id="jasa_lainnya" class="form-control" value="{{ old('jasa_lainnya', $pdrbhargaberlakukategori->jasa_lainnya) }}" required>
            </div>

            <!-- Jumlah Total -->
            <div class="col-md-6 mb-3">
              <label for="jumlah" class="form-label">Jumlah Total</label>
              <input type="number" step="0.01" name="jumlah" id="jumlah" class="form-control" value="{{ old('jumlah', $pdrbhargaberlakukategori->jumlah) }}" required>
            </div>
          </div>

          <div class="d-flex mt-3">
            <button type="submit" class="btn btn-primary me-2">Update Data</button>
            <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Cancel</a>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@endsection
