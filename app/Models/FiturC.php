<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiturC extends Model
{
    protected $table = 'fitur_c';
    protected $primaryKey = 'id';
    protected $fillable = ['ruang_id', 'nama_fitur'];
    

    public function ruang()
    {
        return $this->belongsTo(AreaC::class, 'ruang_id', 'ruang_id');
    }
}
