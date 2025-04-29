<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreaC extends Model
{
    protected $table = 'area_c'; 
    protected $primaryKey = 'ruang_id'; 
    protected $fillable = ['nama', 'deskripsi'];
    public $timestamps = false;

    public function fiturs()
    {

        return $this->hasMany(FiturC::class, 'ruang_id', 'ruang_id');
    }
}
