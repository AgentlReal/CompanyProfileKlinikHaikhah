<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MisiNilai extends Model
{
    protected $table = 'misi_nilai';
    protected $primaryKey = 'id_misinilai';
    protected $fillable = ['judul'];
    public $timestamps = false;

    public function fiturs()
    {

        return $this->hasMany(FiturMisiNilai::class, 'id_misinilai', 'id_misinilai');
    }
}
