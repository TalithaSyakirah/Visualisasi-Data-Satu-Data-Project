@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0">✏ Edit Data Kondisi Ketenagakerjaan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('kondisiketenagakerjaan.update', $kondisiketenagakerjaan->id) }}" method="POST">
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
                            value="{{ old('tahun', $kondisiketenagakerjaan->tahun) }}" 
                            required
                        >
                    </div>

                    {{-- Angkatan Kerja --}}
                    <div class="mb-3">
                        <label for="angkatan_kerja" class="form-label">Angkatan Kerja</label>
                        <input 
                            type="number" 
                            name="angkatan_kerja" 
                            id="angkatan_kerja" 
                            class="form-control" 
                            value="{{ old('angkatan_kerja', $kondisiketenagakerjaan->angkatan_kerja) }}" 
                            required
                        >
                    </div>

                    {{-- Bukan Angkatan Kerja --}}
                    <div class="mb-3">
                        <label for="bukan_angkatan_kerja" class="form-label">Bukan Angkatan Kerja</label>
                        <input 
                            type="number" 
                            name="bukan_angkatan_kerja" 
                            id="bukan_angkatan_kerja" 
                            class="form-control" 
                            value="{{ old('bukan_angkatan_kerja', $kondisiketenagakerjaan->bukan_angkatan_kerja) }}" 
                            required
                        >
                    </div>

                    {{-- Jumlah --}}
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input 
                            type="number" 
                            name="jumlah" 
                            id="jumlah" 
                            class="form-control" 
                            value="{{ old('jumlah', $kondisiketenagakerjaan->jumlah) }}" 
                            required
                        >
                    </div>

                    {{-- Tombol Aksi --}}
                    <div class="d-flex">
                        <button type="submit" class="btn btn-success me-2">Update Data</button>
                        <a href="{{ route('dashboard.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
