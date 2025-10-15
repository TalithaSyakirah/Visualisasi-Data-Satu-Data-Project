<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Luas Kecamatan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container-custom {
            max-width: 900px;
            margin: 30px auto;
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .table thead {
            background-color: #f1f1f1;
        }

        .btn {
            padding: 4px 10px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container-custom">
    <h1>Data Luas Kecamatan</h1>

    {{-- Form Tambah Data --}}
    <h5 class="mt-4">Tambah Data Baru</h5>
    <form action="{{ route('luaskecamatan.store') }}" method="POST" class="row g-2 mt-2">
        @csrf
        <div class="col-md-6">
            <input type="text" name="kecamatan" class="form-control" placeholder="Nama Kecamatan" required>
        </div>
        <div class="col-md-4">
            <input type="number" name="luaskm2" class="form-control" placeholder="Luas (Km²)" required>
        </div>
        <div class="col-md-2 d-grid">
            <button type="submit" class="btn btn-success">Tambah</button>
        </div>
    </form>
    <br>
    <br>

    {{-- Tabel Data --}}
    <table class="table table-bordered table-striped">
        <thead>
            <tr class="text-center">
                <th>No</th>
                <th>Nama Kecamatan</th>
                <th>Luas (Km²)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($luaskecamatans as $index => $data)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $data->kecamatan }}</td>
                    <td>{{ $data->luaskm2 }}</td>
                    <td class="text-center">
                        <a href="{{ route('luaskecamatan.viewUpdate', $data->id) }}" class="btn btn-sm btn-primary">
                            Edit
                        </a>
                        <form action="{{ route('luaskecamatan.destroy', $data->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Belum ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

</body>
</html>
