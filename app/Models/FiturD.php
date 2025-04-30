<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiturD extends Model
{
    protected $table = 'fitur_d';
    protected $primaryKey = 'id';
    protected $fillable = ['ruang_id', 'nama_fitur'];
    public $timestamps = false;

    public function ruang()
    {
        return $this->belongsTo(AreaD::class, 'ruang_id', 'ruang_id');
    }
}
