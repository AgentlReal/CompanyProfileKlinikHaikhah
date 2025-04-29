<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontak'; 
    protected $fillable = ['alamat', 'NoTlpn', 'email', 'Jam'];
}
