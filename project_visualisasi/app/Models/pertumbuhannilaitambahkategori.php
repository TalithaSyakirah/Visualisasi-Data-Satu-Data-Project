<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class pertumbuhannilaitambahkategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'pertanian_kehutanan_perikanan',
        'pertambangan_penggalian',
        'industri_pengolahan',
        'pengadaan_listrik_gas',
        'pengadaan_air_sampah',
        'konstruksi',
        'perdagangan_reparasi_motor',
        'transportasi_pergudangan',
        'akomodasi_makan_minum',
        'informasi_komunikasi',
        'jasa_keuangan_asuransi',
        'real_estat',
        'jasa_perusahaan',
        'administrasi_sosial_wajib',
        'jasa_pendidikan',
        'jasa_kesehatan_sosial',
        'jasa_lainnya',
        'jumlah'
        ] ;
}
