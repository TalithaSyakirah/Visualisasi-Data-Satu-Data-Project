<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Kecamatan & Jumlah Penduduk</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  @vite(['resources/scss/app.scss', 'resources/js/app.js'])
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

  <!-- ✅ MDBootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.css" rel="stylesheet" />

  <!-- ✅ Chart.js HARUS DITAMBAHKAN SEBELUM MDB JS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

  <!-- ✅ MDBootstrap JS -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.0/mdb.min.js"></script>
  <style>
    body {
      background-color: #f8f9fa;
    }

    /* Container utama tiap bagian */
    .container-custom {
      width: 90%;
      /* 🟢 biar hampir selebar layar */
      margin: 40px auto;
      /* tetap di tengah tapi lebih lebar */
      background: #fff;
      padding: 25px 30px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    /* Jarak antar blok kontainer */
    .container-custom+.container-custom {
      margin-top: 50px;
      /* 🟢 beri jarak antar bagian */
    }

    h1,
    h4 {
      text-align: center;
      margin-bottom: 25px;
      color: #333;
    }

    .table {
      width: 100%;
    }

    .table thead {
      background-color: #f1f1f1;
    }

    .btn {
      padding: 4px 10px;
      font-size: 0.9rem;
    }

    /* Tombol tambah di kanan bawah form */
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
    <table class="table table-bordered table-hover text-center align-middle">
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
              <a href="{{ route('luaskecamatan.viewUpdate', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
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

  {{-- ====================== BAGIAN: JUMLAH PERSENTASE MISKIN ====================== --}}
  <div class="container-custom">
    <h1>Data Jumlah Persentase Miskin</h1>
    <!-- Buat Visualisasi -->
    <div class="container my-5">
      <div class="card shadow-3 border-0">
        <div class="card-body">
          <h4 class="text-center text-danger mb-4">
            📉 Visualisasi Jumlah Persentase Penduduk Miskin
          </h4>
          <canvas id="chartPersentaseMiskin"></canvas>
        </div>
      </div>
    </div>
    <!-- Visualisasi end -->

    {{-- Form Tambah Data --}}
    <form action="{{ route('jumlahpersentasemiskin.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-3">
        <input type="number" name="tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-3">
        <input type="number" name="garis_kemiskinan" class="form-control" placeholder="Garis Kemiskinan" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jumlah_penduduk_miskin" class="form-control"
          placeholder="Jumlah Penduduk Miskin" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="persentase_penduduk_miskin" class="form-control"
          placeholder="Persentase (%)" required>
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
          <th>Garis Kemiskinan</th>
          <th>Jumlah Penduduk Miskin</th>
          <th>Persentase Penduduk Miskin (%)</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($jumlahpersentasemiskins as $index => $data)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $data->tahun }}</td>
            <td>{{ $data->garis_kemiskinan }}</td>
            <td>{{ $data->jumlah_penduduk_miskin }}</td>
            <td>{{ $data->persentase_penduduk_miskin }}</td>
            <td>
              <a href="{{ route('jumlahpersentasemiskin.viewUpdate', $data->id) }}"
                class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('jumlahpersentasemiskin.destroy', $data->id) }}" method="POST" class="d-inline">
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

  {{-- ====================== BAGIAN: IPM MENURUT PEMBENTUK ====================== --}}
  <div class="container-custom">
    <h1>Data IPM Menurut Pembentuk</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('ipmmenurutpembentuk.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-2">
        <input type="number" name="tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="angka_harapan_hidup" class="form-control"
          placeholder="Angka Harapan Hidup" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="harapan_lama_sekolah" class="form-control"
          placeholder="Harapan Lama Sekolah" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="rata_rata_lama_sekolah" class="form-control"
          placeholder="Rata-rata Lama Sekolah" required>
      </div>
      <div class="col-md-2">
        <input type="number" name="pengeluaran_per_kapita" class="form-control" placeholder="Pengeluaran per Kapita"
          required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="indeks_pembangunan_manusia" class="form-control" placeholder="IPM"
          required>
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
          <th>Angka Harapan Hidup</th>
          <th>Harapan Lama Sekolah</th>
          <th>Rata-rata Lama Sekolah</th>
          <th>Pengeluaran per Kapita</th>
          <th>Indeks Pembangunan Manusia</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($ipmmenurutpembentuks as $index => $data)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $data->tahun }}</td>
            <td>{{ $data->angka_harapan_hidup }}</td>
            <td>{{ $data->harapan_lama_sekolah }}</td>
            <td>{{ $data->rata_rata_lama_sekolah }}</td>
            <td>{{ $data->pengeluaran_per_kapita }}</td>
            <td>{{ $data->indeks_pembangunan_manusia }}</td>
            <td>
              <a href="{{ route('ipmmenurutpembentuk.viewUpdate', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('ipmmenurutpembentuk.destroy', $data->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"
                  onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="8" class="text-muted">Belum ada data</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  {{-- ====================== BAGIAN: IPM KABUPATEN/KOTA ====================== --}}
  <div class="container-custom">
    <h1>Data IPM Kabupaten / Kota</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('ipmkabupatenkota.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf

      <div class="col-md-2">
        <input type="number" name="tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_sambas" class="form-control" placeholder="Sambas" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_bengkayang" class="form-control" placeholder="Bengkayang"
          required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_landak" class="form-control" placeholder="Landak" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_mempawah" class="form-control" placeholder="Mempawah" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_sanggau" class="form-control" placeholder="Sanggau" required>
      </div>

      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_ketapang" class="form-control" placeholder="Ketapang" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_sintang" class="form-control" placeholder="Sintang" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_kapuas_hulu" class="form-control" placeholder="Kapuas Hulu"
          required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_sekadau" class="form-control" placeholder="Sekadau" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_melawi" class="form-control" placeholder="Melawi" required>
      </div>
      <div class="col-md-2">
        <input type="number" step="0.01" name="kabupaten_kayong_utara" class="form-control" placeholder="Kayong Utara"
          required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="kabupaten_kubu_raya" class="form-control" placeholder="Kubu Raya"
          required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="kota_pontianak" class="form-control" placeholder="Kota Pontianak"
          required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="kota_singkawang" class="form-control" placeholder="Kota Singkawang"
          required>
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
          <th>Sambas</th>
          <th>Bengkayang</th>
          <th>Landak</th>
          <th>Mempawah</th>
          <th>Sanggau</th>
          <th>Ketapang</th>
          <th>Sintang</th>
          <th>Kapuas Hulu</th>
          <th>Sekadau</th>
          <th>Melawi</th>
          <th>Kayong Utara</th>
          <th>Kubu Raya</th>
          <th>Kota Pontianak</th>
          <th>Kota Singkawang</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($ipmkabupatenkotas as $index => $data)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $data->tahun }}</td>
            <td>{{ $data->kabupaten_sambas }}</td>
            <td>{{ $data->kabupaten_bengkayang }}</td>
            <td>{{ $data->kabupaten_landak }}</td>
            <td>{{ $data->kabupaten_mempawah }}</td>
            <td>{{ $data->kabupaten_sanggau }}</td>
            <td>{{ $data->kabupaten_ketapang }}</td>
            <td>{{ $data->kabupaten_sintang }}</td>
            <td>{{ $data->kabupaten_kapuas_hulu }}</td>
            <td>{{ $data->kabupaten_sekadau }}</td>
            <td>{{ $data->kabupaten_melawi }}</td>
            <td>{{ $data->kabupaten_kayong_utara }}</td>
            <td>{{ $data->kabupaten_kubu_raya }}</td>
            <td>{{ $data->kota_pontianak }}</td>
            <td>{{ $data->kota_singkawang }}</td>
            <td>
              <a href="{{ route('ipmkabupatenkota.viewUpdate', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('ipmkabupatenkota.destroy', $data->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"
                  onclick="return confirm('Yakin ingin menghapus data ini?')">
                  Hapus
                </button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="17" class="text-muted">Belum ada data</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  {{-- ====================== BAGIAN: KONDISI KETENAGAKERJAAN ====================== --}}
  <div class="container-custom">
    <h1>Data Kondisi Ketenagakerjaan</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('kondisiketenagakerjaan.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-3">
        <input type="number" name="tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-3">
        <input type="number" name="angkatan_kerja" class="form-control" placeholder="Angkatan Kerja" required>
      </div>
      <div class="col-md-3">
        <input type="number" name="bukan_angkatan_kerja" class="form-control" placeholder="Bukan Angkatan Kerja"
          required>
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
          <th>Angkatan Kerja</th>
          <th>Bukan Angkatan Kerja</th>
          <th>Jumlah</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($kondisiketenagakerjaans as $index => $data)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $data->tahun }}</td>
            <td>{{ $data->angkatan_kerja }}</td>
            <td>{{ $data->bukan_angkatan_kerja }}</td>
            <td>{{ $data->jumlah }}</td>
            <td>
              <a href="{{ route('kondisiketenagakerjaan.viewUpdate', $data->id) }}"
                class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('kondisiketenagakerjaan.destroy', $data->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"
                  onclick="return confirm('Yakin ingin menghapus data ini?')">
                  Hapus
                </button>
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

  {{-- ====================== BAGIAN: TINGKAT PENGANGGURAN TERBUKA ====================== --}}
  <div class="container-custom">
    <h1>Data Tingkat Pengangguran Terbuka</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('tingkatpengangguranterbuka.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-6">
        <input type="number" name="tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-6">
        <input type="number" step="0.01" name="tingkat_pengangguran_terbuka" class="form-control"
          placeholder="Tingkat Pengangguran Terbuka (%)" required>
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
          <th>Tingkat Pengangguran Terbuka (%)</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($tingkatpengangguranterbukas as $index => $data)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $data->tahun }}</td>
            <td>{{ $data->tingkat_pengangguran_terbuka }}</td>
            <td>
              <a href="{{ route('tingkatpengangguranterbuka.viewUpdate', $data->id) }}"
                class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('tingkatpengangguranterbuka.destroy', $data->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"
                  onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
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

  {{-- ====================== BAGIAN: BEKERJA MENURUT LAPANGAN USAHA ====================== --}}
  <div class="container-custom">
    <h1>Data Bekerja Menurut Lapangan Usaha</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('bekerjamenurutlapanganusaha.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf

      <div class="col-md-3">
        <input type="number" name="tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="pertanian_kehutanan_perikanan" class="form-control"
          placeholder="Pertanian, Kehutanan & Perikanan" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="pertambangan_penggalian" class="form-control"
          placeholder="Pertambangan & Penggalian" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="industri" class="form-control" placeholder="Industri" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="listrik_gas_air" class="form-control" placeholder="Listrik, Gas & Air"
          required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="konstruksi" class="form-control" placeholder="Konstruksi" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="perdagangan_akomodasi" class="form-control"
          placeholder="Perdagangan & Akomodasi" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="transportasi_komunikasi" class="form-control"
          placeholder="Transportasi & Komunikasi" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="keuangan_real_estate" class="form-control"
          placeholder="Keuangan & Real Estate" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_kemasyarakatan_lainnya" class="form-control"
          placeholder="Jasa Kemasyarakatan & Lainnya" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jumlah" class="form-control" placeholder="Jumlah Total" required>
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
          <th>Pertanian, Kehutanan & Perikanan</th>
          <th>Pertambangan & Penggalian</th>
          <th>Industri</th>
          <th>Listrik, Gas & Air</th>
          <th>Konstruksi</th>
          <th>Perdagangan & Akomodasi</th>
          <th>Transportasi & Komunikasi</th>
          <th>Keuangan & Real Estate</th>
          <th>Jasa Kemasyarakatan & Lainnya</th>
          <th>Jumlah</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse ($bekerjamenurutlapanganusahas as $index => $data)
          <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $data->tahun }}</td>
            <td>{{ $data->pertanian_kehutanan_perikanan }}</td>
            <td>{{ $data->pertambangan_penggalian }}</td>
            <td>{{ $data->industri }}</td>
            <td>{{ $data->listrik_gas_air }}</td>
            <td>{{ $data->konstruksi }}</td>
            <td>{{ $data->perdagangan_akomodasi }}</td>
            <td>{{ $data->transportasi_komunikasi }}</td>
            <td>{{ $data->keuangan_real_estate }}</td>
            <td>{{ $data->jasa_kemasyarakatan_lainnya }}</td>
            <td>{{ $data->jumlah }}</td>
            <td>
              <a href="{{ route('bekerjamenurutlapanganusaha.viewUpdate', $data->id) }}"
                class="btn btn-warning btn-sm">Edit</a>
              <form action="{{ route('bekerjamenurutlapanganusaha.destroy', $data->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"
                  onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
              </form>
            </td>
          </tr>
        @empty
          <tr>
            <td colspan="13" class="text-muted">Belum ada data</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
  {{-- ====================== BAGIAN: PDRB HARGA BERLAKU BERDASARKAN KATEGORI ====================== --}}
  <div class="container-custom">
    <h1>Data PDRB Harga Berlaku Berdasarkan Kategori</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('pdrbhargaberlakukategori.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf
      <div class="col-md-3">
        <input type="number" name="tahun" class="form-control" placeholder="Tahun" required>
      </div>

      <div class="col-md-3">
        <input type="number" step="0.01" name="pertanian_perikanan" class="form-control"
          placeholder="Pertanian, Kehutanan & Perikanan" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="pertambangan_penggalian" class="form-control"
          placeholder="Pertambangan & Penggalian" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="industri_pengolahan" class="form-control"
          placeholder="Industri Pengolahan" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="listrik_gas" class="form-control" placeholder="Pengadaan Listrik & Gas"
          required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="air_sampah" class="form-control"
          placeholder="Pengadaan Air, Sampah & Daur Ulang" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="konstruksi" class="form-control" placeholder="Konstruksi" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="perdagangan_reparasi" class="form-control"
          placeholder="Perdagangan Besar & Reparasi" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="transportasi_pergudangan" class="form-control"
          placeholder="Transportasi & Pergudangan" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="akomodasi_makanan" class="form-control"
          placeholder="Akomodasi & Makanan Minuman" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="informasi_komunikasi" class="form-control"
          placeholder="Informasi & Komunikasi" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_keuangan_asuransi" class="form-control"
          placeholder="Jasa Keuangan & Asuransi" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="real_estate" class="form-control" placeholder="Real Estate" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_perusahaan" class="form-control" placeholder="Jasa Perusahaan"
          required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="administrasi_sosial" class="form-control"
          placeholder="Administrasi Pemerintahan & Jaminan Sosial" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_pendidikan" class="form-control" placeholder="Jasa Pendidikan"
          required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_kesehatan_sosial" class="form-control"
          placeholder="Jasa Kesehatan & Sosial" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_lainnya" class="form-control" placeholder="Jasa Lainnya" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jumlah" class="form-control" placeholder="Jumlah Total" required>
      </div>

      {{-- Tombol Submit --}}
      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
          <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Pertanian, Kehutanan & Perikanan</th>
            <th>Pertambangan & Penggalian</th>
            <th>Industri Pengolahan</th>
            <th>Listrik & Gas</th>
            <th>Air & Pengelolaan Sampah</th>
            <th>Konstruksi</th>
            <th>Perdagangan & Reparasi</th>
            <th>Transportasi & Pergudangan</th>
            <th>Akomodasi & Makanan</th>
            <th>Informasi & Komunikasi</th>
            <th>Jasa Keuangan & Asuransi</th>
            <th>Real Estate</th>
            <th>Jasa Perusahaan</th>
            <th>Administrasi & Sosial</th>
            <th>Jasa Pendidikan</th>
            <th>Jasa Kesehatan & Sosial</th>
            <th>Jasa Lainnya</th>
            <th>Jumlah</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($pdrbhargaberlakukategoris as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $data->tahun }}</td>
              <td>{{ $data->pertanian_perikanan }}</td>
              <td>{{ $data->pertambangan_penggalian }}</td>
              <td>{{ $data->industri_pengolahan }}</td>
              <td>{{ $data->listrik_gas }}</td>
              <td>{{ $data->air_sampah }}</td>
              <td>{{ $data->konstruksi }}</td>
              <td>{{ $data->perdagangan_reparasi }}</td>
              <td>{{ $data->transportasi_pergudangan }}</td>
              <td>{{ $data->akomodasi_makanan }}</td>
              <td>{{ $data->informasi_komunikasi }}</td>
              <td>{{ $data->jasa_keuangan_asuransi }}</td>
              <td>{{ $data->real_estate }}</td>
              <td>{{ $data->jasa_perusahaan }}</td>
              <td>{{ $data->administrasi_sosial }}</td>
              <td>{{ $data->jasa_pendidikan }}</td>
              <td>{{ $data->jasa_kesehatan_sosial }}</td>
              <td>{{ $data->jasa_lainnya }}</td>
              <td>{{ $data->jumlah }}</td>
              <td>
                <a href="{{ route('pdrbhargaberlakukategori.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pdrbhargaberlakukategori.destroy', $data->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="21" class="text-muted">Belum ada data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  {{-- ====================== BAGIAN: PERTUMBUHAN NILAI TAMBAH MENURUT KATEGORI (FIXED) ====================== --}}
  <div class="container-custom">
    <h1>Data Pertumbuhan Nilai Tambah Menurut Kategori</h1>

    {{-- Form Tambah Data --}}
    <form action="{{ route('pertumbuhannilaitambahkategori.store') }}" method="POST" class="row g-2 mt-2 mb-3">
      @csrf

      <div class="col-md-3">
        <input type="number" name="tahun" class="form-control" placeholder="Tahun" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="pertanian_kehutanan_perikanan" class="form-control"
          placeholder="Pertanian, Kehutanan & Perikanan" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="pertambangan_penggalian" class="form-control"
          placeholder="Pertambangan & Penggalian" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="industri_pengolahan" class="form-control"
          placeholder="Industri Pengolahan" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="pengadaan_listrik_gas" class="form-control"
          placeholder="Pengadaan Listrik & Gas" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="pengadaan_air_sampah" class="form-control"
          placeholder="Pengadaan Air & Sampah" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="konstruksi" class="form-control" placeholder="Konstruksi" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="perdagangan_reparasi_motor" class="form-control"
          placeholder="Perdagangan & Reparasi Motor" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="transportasi_pergudangan" class="form-control"
          placeholder="Transportasi & Pergudangan" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="akomodasi_makan_minum" class="form-control"
          placeholder="Akomodasi & Makan Minum" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="informasi_komunikasi" class="form-control"
          placeholder="Informasi & Komunikasi" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_keuangan_asuransi" class="form-control"
          placeholder="Jasa Keuangan & Asuransi" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="real_estat" class="form-control" placeholder="Real Estat" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_perusahaan" class="form-control" placeholder="Jasa Perusahaan"
          required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="administrasi_sosial_wajib" class="form-control"
          placeholder="Administrasi & Jaminan Sosial" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_pendidikan" class="form-control" placeholder="Jasa Pendidikan"
          required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_kesehatan_sosial" class="form-control"
          placeholder="Jasa Kesehatan & Sosial" required>
      </div>
      <div class="col-md-3">
        <input type="number" step="0.01" name="jasa_lainnya" class="form-control" placeholder="Jasa Lainnya" required>
      </div>
      {{-- TAMBAH KOLOM JUMLAH AGAR SESUAI DENGAN PDRB HARGA BERLAKU --}}
      <div class="col-md-3">
        <input type="number" step="0.01" name="jumlah" class="form-control" placeholder="Jumlah Total" required>
      </div>

      {{-- Tombol di kanan bawah --}}
      <div class="col-12 form-footer">
        <button type="submit" class="btn btn-success">Tambah</button>
      </div>
    </form>

    {{-- Tabel Data --}}
    <div class="table-responsive">
      <table class="table table-bordered table-hover text-center align-middle">
        <thead class="table-secondary">
          <tr>
            <th>No</th>
            <th>Tahun</th>
            <th>Pertanian, Kehutanan & Perikanan</th>
            <th>Pertambangan & Penggalian</th>
            <th>Industri Pengolahan</th>
            <th>Pengadaan Listrik & Gas</th>
            <th>Pengadaan Air & Pengelolaan Sampah</th>
            <th>Konstruksi</th>
            <th>Perdagangan & Reparasi Motor</th>
            <th>Transportasi & Pergudangan</th>
            <th>Akomodasi & Makan Minum</th>
            <th>Informasi & Komunikasi</th>
            <th>Jasa Keuangan & Asuransi</th>
            <th>Real Estat</th>
            <th>Jasa Perusahaan</th>
            <th>Administrasi & Jaminan Sosial</th>
            <th>Jasa Pendidikan</th>
            <th>Jasa Kesehatan & Sosial</th>
            <th>Jasa Lainnya</th>
            {{-- TAMBAH KOLOM JUMLAH --}}
            <th>Jumlah</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($pertumbuhannilaitambahkategoris as $index => $data)
            <tr>
              <td>{{ $index + 1 }}</td>
              <td>{{ $data->tahun }}</td>
              <td>{{ $data->pertanian_kehutanan_perikanan }}</td>
              <td>{{ $data->pertambangan_penggalian }}</td>
              <td>{{ $data->industri_pengolahan }}</td>
              <td>{{ $data->pengadaan_listrik_gas }}</td>
              <td>{{ $data->pengadaan_air_sampah }}</td>
              <td>{{ $data->konstruksi }}</td>
              <td>{{ $data->perdagangan_reparasi_motor }}</td>
              <td>{{ $data->transportasi_pergudangan }}</td>
              <td>{{ $data->akomodasi_makan_minum }}</td>
              <td>{{ $data->informasi_komunikasi }}</td>
              <td>{{ $data->jasa_keuangan_asuransi }}</td>
              <td>{{ $data->real_estat }}</td>
              <td>{{ $data->jasa_perusahaan }}</td>
              <td>{{ $data->administrasi_sosial_wajib }}</td>
              <td>{{ $data->jasa_pendidikan }}</td>
              <td>{{ $data->jasa_kesehatan_sosial }}</td>
              <td>{{ $data->jasa_lainnya }}</td>
              {{-- TAMPILKAN DATA JUMLAH --}}
              <td>{{ $data->jumlah}}</td>
              <td>
                <a href="{{ route('pertumbuhannilaitambahkategori.viewUpdate', $data->id) }}"
                  class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('pertumbuhannilaitambahkategori.destroy', $data->id) }}" method="POST"
                  class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                </form>
              </td>
            </tr>
          @empty
            <tr>
              <td colspan="21" class="text-muted">Belum ada data</td>
            </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const ctx = document.getElementById('chartPersentaseMiskin');
      if (!ctx) {
        console.error("Canvas chartPersentaseMiskin tidak ditemukan!");
        return;
      }

      // ✅ Cek apakah Chart terdefinisi
      if (typeof Chart === 'undefined') {
        console.error("Chart.js belum dimuat!");
        return;
      }

      new Chart(ctx, {
        type: 'line',
        data: {
          labels: {!! json_encode($jumlahpersentasemiskins->pluck('tahun')) !!},
          datasets: [{
            label: 'Persentase Penduduk Miskin (%)',
            data: {!! json_encode($jumlahpersentasemiskins->pluck('persentase_penduduk_miskin')) !!},
            borderColor: '#E53935',
            backgroundColor: 'rgba(229, 57, 53, 0.2)',
            fill: true,
            tension: 0.3
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: { position: 'bottom' },
            title: {
              display: true,
              text: 'Tren Persentase Penduduk Miskin per Tahun'
            }
          }
        }
      });
    });
  </script>

</body>

</html>