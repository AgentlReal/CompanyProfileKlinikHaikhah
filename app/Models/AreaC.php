<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaC extends Model
{
    protected $table = 'area_c'; 
    protected $fillable = ['nama', 'deskripsi'];
    

    public function fiturs()
    {
        return $this->hasMany(FiturC::class, 'ruang_id', 'id');
    }
}
