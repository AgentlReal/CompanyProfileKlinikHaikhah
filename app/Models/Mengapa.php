<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mengapa extends Model
{
    protected $table = 'mengapa_kami'; 
    protected $fillable = ['title', 'deskripsi']; 
}
