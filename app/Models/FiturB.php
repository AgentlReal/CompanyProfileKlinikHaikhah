<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiturB extends Model
{
    protected $table = 'fitur_b'; 
    protected $fillable = ['ruang_id', 'nama_fitur'];

    
    public function ruang()
    {
        return $this->belongsTo(RuangB::class, 'ruang_id', 'id');
    }
}
