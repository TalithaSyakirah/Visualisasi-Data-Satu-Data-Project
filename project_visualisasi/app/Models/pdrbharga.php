<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pdrbharga extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'pertanian_perikanan',
        'pertambangan_penggalian',
        'industri_pengolahan',
        'listrik_gas',
        'air_sampah',
        'konstruksi',
        'perdagangan_reparasi',
        'transportasi_pergudangan',
        'akomodasi_makanan',
        'informasi_komunikasi',
        'jasa_keuangan_asuransi',
        'real_estate',
        'jasa_perusahaan',
        'administrasi_sosial',
        'jasa_pendidikan',
        'jasa_kesehatan_sosial',
        'jasa_lainnya',
        'jumlah',
    ];

}
