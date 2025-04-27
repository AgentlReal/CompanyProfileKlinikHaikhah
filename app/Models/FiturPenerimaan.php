<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiturPenerimaan extends Model
{
    protected $table = 'fitur_penerimaan'; 
    protected $fillable = ['ruang_id', 'nama_fitur'];
 

    public function ruang()
    {
        return $this->belongsTo(RuangPenerimaan::class, 'ruang_id', 'id');
    }
}
