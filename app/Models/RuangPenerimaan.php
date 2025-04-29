<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuangPenerimaan extends Model
{
    protected $table = 'ruang_penerimaan';
    protected $fillable = ['nama', 'deskripsi'];


    public function fiturs()
    {
        return $this->hasMany(FiturPenerimaan::class, 'ruang_id', 'id');
    }
}
