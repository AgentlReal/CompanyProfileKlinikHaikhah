<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuangB extends Model
{
    protected $table = 'ruang_b';
    protected $fillable = ['nama', 'deskripsi'];


    public function fiturs()
    {
        return $this->hasMany(FiturB::class, 'id', 'ruang_id');
    }
}
