<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiturB extends Model
{
    protected $table = 'fitur_b';
    protected $primaryKey = 'id';
    protected $fillable = ['ruang_id', 'nama_fitur'];
    public $timestamps = false;

    public function ruang()
    {
        return $this->belongsTo(RuangB::class, 'ruang_id', 'ruang_id');
    }
}
