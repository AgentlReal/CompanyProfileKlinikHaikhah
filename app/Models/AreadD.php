<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AreadD extends Model
{
    protected $table = 'area_d'; 
    protected $primaryKey = 'ruang_id'; 
    protected $fillable = ['nama', 'deskripsi'];
    public $timestamps = false;

    public function fiturs()
    {

        return $this->hasMany(FiturD::class, 'ruang_id', 'ruang_id');
    }
}
