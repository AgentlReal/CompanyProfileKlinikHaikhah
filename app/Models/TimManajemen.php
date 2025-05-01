<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimManajemen extends Model
{
    protected $table = 'tim_manajemen'; 
    protected $fillable = ['nama', 'spesialis', 'deskripsi'];

}
