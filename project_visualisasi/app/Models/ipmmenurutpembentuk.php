<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ipmmenurutpembentuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'tahun',
        'angka_harapan_hidup',
        'harapan_lama_sekolah',
        'rata_rata_lama_sekolah',
        'pengeluaran_per_kapita',
        'indeks_pembangunan_manusia',
    ];
}
