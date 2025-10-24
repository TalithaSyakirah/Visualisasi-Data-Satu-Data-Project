@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
  <div class="col-md-8">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-info text-white">
        <h4 class="mb-0">✏ Edit Data Jumlah & Persentase Penduduk Miskin</h4>
      </div>
      <div class="card-body">
        <form action="{{ route('jumlahpersentasemiskin.update', $jumlahpersentasemiskin->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" name="tahun" id="tahun" class="form-control"
              value="{{ old('tahun', $jumlahpersentasemiskin->tahun) }}" required>
          </div>

          <div class="mb-3">
            <label for="garis_kemiskinan" class="form-label">Garis Kemiskinan</label>
            <input type="number" name="garis_kemiskinan" id="garis_kemiskinan" class="form-control"
              value="{{ old('garis_kemiskinan', $jumlahpersentasemiskin->garis_kemiskinan) }}" required>
          </div>

          <div class="mb-3">
            <label for="jumlah_penduduk_miskin" class="form-label">Jumlah Penduduk Miskin</label>
            <input type="number" step="0.01" name="jumlah_penduduk_miskin" id="jumlah_penduduk_miskin"
              class="form-control"
              value="{{ old('jumlah_penduduk_miskin', $jumlahpersentasemiskin->jumlah_penduduk_miskin) }}" required>
          </div>

          <div class="mb-3">
            <label for="persentase_penduduk_miskin" class="form-label">Persentase Penduduk Miskin (%)</label>
            <input type="number" step="0.01" name="persentase_penduduk_miskin" id="persentase_penduduk_miskin"
              class="form-control"
              value="{{ old('persentase_penduduk_miskin', $jumlahpersentasemiskin->persentase_penduduk_miskin) }}"
              required>
          </div>

          <div class="d-flex">
            <button type="submit" class="btn btn-primary me-2">Update Data</button>
            <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Cancel</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
