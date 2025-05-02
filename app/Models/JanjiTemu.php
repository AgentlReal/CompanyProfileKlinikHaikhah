<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JanjiTemu extends Model
{
    protected $table = 'janji_temu';

protected $fillable = [
    'nama_lengkap',
    'nomor_telepon',
    'email',
    'layanan',
    'tanggal',
    'waktu',
    'Keluhan_Gejala',
    'catatan_tambahan'
];

}
