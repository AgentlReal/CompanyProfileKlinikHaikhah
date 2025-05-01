<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perjalanan extends Model
{
    protected $table = 'perjalanan';
    protected $primaryKey = 'tahun';
    protected $fillable = ['judul', 'deskripsi'];
    public $timestamps = false;
}

