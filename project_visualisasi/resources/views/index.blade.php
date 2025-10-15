<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Kecamatan & Jumlah Penduduk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
    }

    .container-custom {
      max-width: 1000px;
      margin: 40px auto;
      background: #fff;
      padding: 25px 30px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    h1, h4 {
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

    /* Membuat tombol tambah berada di kanan bawah form */
    .form-footer {
      display: flex;
      justify-content: flex-end;
      margin-top: 10px;
    }
  </style>
</head>
<body>

{{-- ====================== BAGIAN 1: LUAS KECAMATAN ====================== --}}
<div class="container-custom">
  <h1>Data Luas Kecamatan</h1>

  {{-- Form Tambah Data --}}
  <form action="{{ route('luaskecamatan.store') }}" method="POST" class="row g-2 mt-2 mb-3">
    @csrf
    <div class="col-md-6">
      <input type="text" name="kecamatan" class="form-control" placeholder="Nama Kecamatan" required>
    </div>
    <div class="col-md-6">
      <input type="number" name="luaskm2" class="form-control" placeholder="Luas (Km²)" required>
    </div>

    {{-- Tombol di kanan bawah --}}
    <div class="col-12 form-footer">
      <button type="submit" class="btn btn-success">Tambah</button>
    </div>
  </form>

  {{-- Tabel Data --}}
  <table class="table table-bordered table-striped align-middle text-center">
    <thead class="table-secondary">
      <tr>
        <th>No</th>
        <th>Nama Kecamatan</th>
        <th>Luas (Km²)</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($luaskecamatans as $index => $data)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $data->kecamatan }}</td>
          <td>{{ $data->luaskm2 }}</td>
          <td>
            <a href="{{ route('luaskecamatan.viewUpdate', $data->id) }}" class="btn btn-primary btn-sm">Edit</a>
            <form action="{{ route('luaskecamatan.destroy', $data->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                Hapus
              </button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="4" class="text-muted">Belum ada data</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

{{-- ====================== BAGIAN 2: JUMLAH PENDUDUK ====================== --}}
<div class="container-custom">
  <h1>Data Jumlah Penduduk</h1>

  {{-- Form Tambah Data --}}
  <form action="{{ route('jumlahpenduduk.store') }}" method="POST" class="row g-2 mt-2 mb-3">
    @csrf
    <div class="col-md-3">
      <input type="number" name="tahun" class="form-control" placeholder="Tahun" required>
    </div>
    <div class="col-md-3">
      <input type="number" name="lakilaki" class="form-control" placeholder="Laki-laki" required>
    </div>
    <div class="col-md-3">
      <input type="number" name="perempuan" class="form-control" placeholder="Perempuan" required>
    </div>
    <div class="col-md-3">
      <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>
    </div>

    {{-- Tombol di kanan bawah --}}
    <div class="col-12 form-footer">
      <button type="submit" class="btn btn-success">Tambah</button>
    </div>
  </form>

  {{-- Tabel Data --}}
  <table class="table table-bordered table-hover text-center align-middle">
    <thead class="table-secondary">
      <tr>
        <th>No</th>
        <th>Tahun</th>
        <th>Laki-laki</th>
        <th>Perempuan</th>
        <th>Jumlah</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($jumlahpenduduks as $index => $data)
        <tr>
          <td>{{ $index + 1 }}</td>
          <td>{{ $data->tahun }}</td>
          <td>{{ $data->lakilaki }}</td>
          <td>{{ $data->perempuan }}</td>
          <td>{{ $data->jumlah }}</td>
          <td>
            <a href="{{ route('jumlahpenduduk.viewUpdate', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('jumlahpenduduk.destroy', $data->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
            </form>
          </td>
        </tr>
      @empty
        <tr>
          <td colspan="6" class="text-muted">Belum ada data</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</div>

</body>
</html>
