<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    protected $table = 'pelayanan';
    protected $fillable = ['nama', 'deskripsi', 'gambar'];
    public $timestamps = false;
}

