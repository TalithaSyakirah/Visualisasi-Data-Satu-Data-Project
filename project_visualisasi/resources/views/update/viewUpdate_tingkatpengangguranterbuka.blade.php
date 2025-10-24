@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0">✏ Edit Data Tingkat Pengangguran Terbuka</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('tingkatpengangguranterbuka.update', $tingkatpengangguranterbuka->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Input Tahun --}}
                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input 
                            type="number" 
                            name="tahun" 
                            id="tahun" 
                            class="form-control" 
                            value="{{ old('tahun', $tingkatpengangguranterbuka->tahun) }}" 
                            required
                        >
                    </div>

                    {{-- Input Tingkat Pengangguran Terbuka --}}
                    <div class="mb-3">
                        <label for="tingkat_pengangguran_terbuka" class="form-label">Tingkat Pengangguran Terbuka (%)</label>
                        <input 
                            type="number" 
                            step="0.01" 
                            name="tingkat_pengangguran_terbuka" 
                            id="tingkat_pengangguran_terbuka" 
                            class="form-control" 
                            value="{{ old('tingkat_pengangguran_terbuka', $tingkatpengangguranterbuka->tingkat_pengangguran_terbuka) }}" 
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
