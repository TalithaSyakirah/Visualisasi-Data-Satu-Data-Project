@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">✏ Edit Data Jumlah Penduduk</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('jumlahpenduduk.update', $jumlahpenduduk->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="tahun" class="form-label">Tahun</label>
                        <input 
                            type="number" 
                            name="tahun" 
                            id="tahun" 
                            class="form-control" 
                            value="{{ old('tahun', $jumlahpenduduk->tahun) }}" 
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="lakilaki" class="form-label">Jumlah Laki-laki</label>
                        <input 
                            type="number" 
                            name="lakilaki" 
                            id="lakilaki" 
                            class="form-control" 
                            value="{{ old('lakilaki', $jumlahpenduduk->lakilaki) }}" 
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="perempuan" class="form-label">Jumlah Perempuan</label>
                        <input 
                            type="number" 
                            name="perempuan" 
                            id="perempuan" 
                            class="form-control" 
                            value="{{ old('perempuan', $jumlahpenduduk->perempuan) }}" 
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Total Jumlah Penduduk</label>
                        <input 
                            type="number" 
                            name="jumlah" 
                            id="jumlah" 
                            class="form-control" 
                            value="{{ old('jumlah', $jumlahpenduduk->jumlah) }}" 
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
