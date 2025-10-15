<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipmkabupatenkota extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'kabupaten_sambas',
        'kabupaten_bengkayang',
        'kabupaten_landak',
        'kabupaten_mempawah',
        'kabupaten_sanggau',
        'kabupaten_ketapang',
        'kabupaten_sintang',
        'kabupaten_kapuas_hulu',
        'kabupaten_sekadau',
        'kabupaten_melawi',
        'kabupaten_kayong_utara',
        'kabupaten_kubu_raya',
        'kota_pontianak',
        'kota_singkawang',
    ];
}
