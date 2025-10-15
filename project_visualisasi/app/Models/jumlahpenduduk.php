<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jumlahpenduduk extends Model
{
     use HasFactory;

    protected $fillable = [
        'tahun',
        'lakilaki',
        'perempuan',
        'jumlah',
    ];
}
