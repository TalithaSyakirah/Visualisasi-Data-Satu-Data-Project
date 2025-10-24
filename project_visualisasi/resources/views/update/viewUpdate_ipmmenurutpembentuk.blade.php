@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0">✏ Edit Data IPM Menurut Pembentuk</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('ipmmenurutpembentuk.update', $ipmmenurutpembentuk->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input 
                            type="number" 
                            name="tahun" 
                            id="tahun" 
                            class="form-control" 
                            value="{{ old('tahun', $ipmmenurutpembentuk->tahun) }}" 
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="angka_harapan_hidup" class="form-label">Angka Harapan Hidup</label>
                        <input 
                            type="number" 
                            step="0.01" 
                            name="angka_harapan_hidup" 
                            id="angka_harapan_hidup" 
                            class="form-control" 
                            value="{{ old('angka_harapan_hidup', $ipmmenurutpembentuk->angka_harapan_hidup) }}" 
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="harapan_lama_sekolah" class="form-label">Harapan Lama Sekolah</label>
                        <input 
                            type="number" 
                            step="0.01" 
                            name="harapan_lama_sekolah" 
                            id="harapan_lama_sekolah" 
                            class="form-control" 
                            value="{{ old('harapan_lama_sekolah', $ipmmenurutpembentuk->harapan_lama_sekolah) }}" 
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="rata_rata_lama_sekolah" class="form-label">Rata-rata Lama Sekolah</label>
                        <input 
                            type="number" 
                            step="0.01" 
                            name="rata_rata_lama_sekolah" 
                            id="rata_rata_lama_sekolah" 
                            class="form-control" 
                            value="{{ old('rata_rata_lama_sekolah', $ipmmenurutpembentuk->rata_rata_lama_sekolah) }}" 
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="pengeluaran_per_kapita" class="form-label">Pengeluaran per Kapita</label>
                        <input 
                            type="number" 
                            name="pengeluaran_per_kapita" 
                            id="pengeluaran_per_kapita" 
                            class="form-control" 
                            value="{{ old('pengeluaran_per_kapita', $ipmmenurutpembentuk->pengeluaran_per_kapita) }}" 
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="indeks_pembangunan_manusia" class="form-label">Indeks Pembangunan Manusia</label>
                        <input 
                            type="number" 
                            step="0.01" 
                            name="indeks_pembangunan_manusia" 
                            id="indeks_pembangunan_manusia" 
                            class="form-control" 
                            value="{{ old('indeks_pembangunan_manusia', $ipmmenurutpembentuk->indeks_pembangunan_manusia) }}" 
                            required
                        >
                    </div>

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
