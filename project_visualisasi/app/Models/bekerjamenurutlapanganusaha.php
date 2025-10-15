<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bekerjamenurutlapanganusaha extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'pertanian_kehutanan_perikanan',
        'pertambangan_penggalian',
        'industri',
        'listrik_gas_air',
        'konstruksi',
        'perdagangan_akomodasi',
        'transportasi_komunikasi',
        'keuangan_real_estate',
        'jasa_kemasyarakatan_lainnya',
        'jumlah',
    ];
}
