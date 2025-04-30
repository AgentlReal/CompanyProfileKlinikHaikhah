<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiturC extends Model
{
    protected $table = 'fitur_c';
    protected $primaryKey = 'id';
    protected $fillable = ['ruang_id', 'nama_fitur'];
    public $timestamps = false;

    public function ruang()
    {
        return $this->belongsTo(AreaC::class, 'ruang_id', 'ruang_id');
    }
}
