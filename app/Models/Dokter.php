<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'doctor'; 
    protected $fillable = ['nama', 'spesialis', 'deskripsi'];
}
