<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiturC extends Model
{
    protected $table = 'fitur_c'; 
    protected $fillable = ['ruang_id', 'nama_fitur'];

    
    public function ruang()
    {
        return $this->belongsTo(RuangC::class, 'ruang_id', 'id');
    }
}
