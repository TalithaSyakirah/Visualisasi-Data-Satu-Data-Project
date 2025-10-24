@extends('layouts.app')

@section('content')
<div class="container-custom mt-4">
    <h1>Edit Data IPM Kabupaten / Kota</h1>

    <div class="card shadow-sm border-0 mt-3">
        <div class="card-body">
            <form action="{{ route('ipmkabupatenkota.update', $ipmkabupatenkota->id) }}" method="POST" class="row g-2">
                @csrf
                @method('PUT')

                {{-- Tahun --}}
                <div class="col-md-2">
                    <label class="form-label">Tahun</label>
                    <input type="number" name="tahun" class="form-control" 
                        value="{{ old('tahun', $ipmkabupatenkota->tahun) }}" required>
                </div>

                {{-- Daftar Kabupaten/Kota --}}
                <div class="col-md-2">
                    <label class="form-label">Sambas</label>
                    <input type="number" step="0.01" name="kabupaten_sambas" class="form-control"
                        value="{{ old('kabupaten_sambas', $ipmkabupatenkota->kabupaten_sambas) }}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Bengkayang</label>
                    <input type="number" step="0.01" name="kabupaten_bengkayang" class="form-control"
                        value="{{ old('kabupaten_bengkayang', $ipmkabupatenkota->kabupaten_bengkayang) }}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Landak</label>
                    <input type="number" step="0.01" name="kabupaten_landak" class="form-control"
                        value="{{ old('kabupaten_landak', $ipmkabupatenkota->kabupaten_landak) }}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Mempawah</label>
                    <input type="number" step="0.01" name="kabupaten_mempawah" class="form-control"
                        value="{{ old('kabupaten_mempawah', $ipmkabupatenkota->kabupaten_mempawah) }}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Sanggau</label>
                    <input type="number" step="0.01" name="kabupaten_sanggau" class="form-control"
                        value="{{ old('kabupaten_sanggau', $ipmkabupatenkota->kabupaten_sanggau) }}" required>
                </div>

                <div class="col-md-2">
                    <label class="form-label">Ketapang</label>
                    <input type="number" step="0.01" name="kabupaten_ketapang" class="form-control"
                        value="{{ old('kabupaten_ketapang', $ipmkabupatenkota->kabupaten_ketapang) }}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Sintang</label>
                    <input type="number" step="0.01" name="kabupaten_sintang" class="form-control"
                        value="{{ old('kabupaten_sintang', $ipmkabupatenkota->kabupaten_sintang) }}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Kapuas Hulu</label>
                    <input type="number" step="0.01" name="kabupaten_kapuas_hulu" class="form-control"
                        value="{{ old('kabupaten_kapuas_hulu', $ipmkabupatenkota->kabupaten_kapuas_hulu) }}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Sekadau</label>
                    <input type="number" step="0.01" name="kabupaten_sekadau" class="form-control"
                        value="{{ old('kabupaten_sekadau', $ipmkabupatenkota->kabupaten_sekadau) }}" required>
                </div>
                <div class="col-md-2">
                    <label class="form-label">Melawi</label>
                    <input type="number" step="0.01" name="kabupaten_melawi" class="form-control"
                        value="{{ old('kabupaten_melawi', $ipmkabupatenkota->kabupaten_melawi) }}" required>
                </div>

                <div class="col-md-2">
                    <label class="form-label">Kayong Utara</label>
                    <input type="number" step="0.01" name="kabupaten_kayong_utara" class="form-control"
                        value="{{ old('kabupaten_kayong_utara', $ipmkabupatenkota->kabupaten_kayong_utara) }}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Kubu Raya</label>
                    <input type="number" step="0.01" name="kabupaten_kubu_raya" class="form-control"
                        value="{{ old('kabupaten_kubu_raya', $ipmkabupatenkota->kabupaten_kubu_raya) }}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Kota Pontianak</label>
                    <input type="number" step="0.01" name="kota_pontianak" class="form-control"
                        value="{{ old('kota_pontianak', $ipmkabupatenkota->kota_pontianak) }}" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label">Kota Singkawang</label>
                    <input type="number" step="0.01" name="kota_singkawang" class="form-control"
                        value="{{ old('kota_singkawang', $ipmkabupatenkota->kota_singkawang) }}" required>
                </div>

                {{-- Tombol Update di pojok kanan bawah --}}
                <div class="col-12 d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-success me-2">💾 Update</button>
                    <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">❌ Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
