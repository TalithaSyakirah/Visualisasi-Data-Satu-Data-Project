<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jumlahpersentasemiskin extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'garis_kemiskinan',
        'jumlah_penduduk_miskin',
        'persentase_penduduk_miskin',
    ];
}
