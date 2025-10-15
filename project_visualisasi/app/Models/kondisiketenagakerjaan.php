<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kondisiketenagakerjaan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'angkatan_kerja',
        'bukan_angkatan_kerja',
        'jumlah',
    ] ;
}
