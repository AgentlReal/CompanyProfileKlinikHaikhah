<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaD extends Model
{
    protected $table = 'area_d';
    protected $primaryKey = 'ruang_id';
    protected $fillable = ['nama', 'deskripsi', 'gambar'];
    public $timestamps = false;

    public function fiturs()
    {

        return $this->hasMany(FiturD::class, 'ruang_id', 'ruang_id');
    }
}
