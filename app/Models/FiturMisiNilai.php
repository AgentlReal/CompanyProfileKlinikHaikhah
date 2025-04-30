<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiturMisiNilai extends Model
{
    protected $table = 'list_misinilai'; 
    protected $primaryKey = 'id'; 
    protected $fillable = ['id_misinilai', 'list_item'];
    public $timestamps = false;

    public function fiturs()
    {

        return $this->hasMany(MisiNilai::class, 'id_misinilai', 'id_misinilai');
    }
}
