<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FiturB extends Model
{
    protected $table = 'fitur_b'; 
    protected $primaryKey = 'id'; // Pastikan primary key benar
    protected $fillable = ['ruang_id', 'nama_fitur'];
    public $timestamps = false; // Tambahkan ini jika tidak menggunakan timestamp
    
    public function ruang()
    {
        // Berdasarkan struktur database di gambar
        return $this->belongsTo(RuangB::class, 'ruang_id', 'ruang_id');
    }
}