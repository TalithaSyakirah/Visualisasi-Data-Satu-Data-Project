@extends('layouts.app')

@section('content')
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-warning text-white">
                <h4 class="mb-0">✏ Edit Data Luas Kecamatan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('luaskecamatan.update', $luaskecamatan->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Nama Kecamatan</label>
                        <input 
                            type="text" 
                            name="kecamatan" 
                            id="kecamatan" 
                            class="form-control" 
                            value="{{ old('kecamatan', $luaskecamatan->kecamatan) }}" 
                            required
                        >
                    </div>

                    <div class="mb-3">
                        <label for="luaskm2" class="form-label">Luas (Km²)</label>
                        <input 
                            type="number" 
                            name="luaskm2" 
                            id="luaskm2" 
                            class="form-control" 
                            value="{{ old('luaskm2', $luaskecamatan->luaskm2) }}" 
                            required
                        >
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
