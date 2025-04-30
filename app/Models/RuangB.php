<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuangB extends Model
{
    protected $table = 'ruang_b';
    protected $primaryKey = 'ruang_id';
    protected $fillable = ['nama', 'deskripsi'];
    public $timestamps = false;

    public function fiturs()
    {
        return $this->hasMany(FiturB::class, 'ruang_id', 'ruang_id');
    }
}
