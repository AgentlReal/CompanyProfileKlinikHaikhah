<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontak'; // Nama tabel
    protected $fillable = ['alamat', 'NoTlpn', 'email', 'Jam']; // Sesuaikan dengan kolom di tabel kontak
}
