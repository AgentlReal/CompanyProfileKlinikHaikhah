<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RuangB extends Model
{
    protected $table = 'ruang_b';
    protected $primaryKey = 'ruang_id'; // Pastikan primary key benar
    protected $fillable = ['nama', 'deskripsi'];
    public $timestamps = false; // Tambahkan ini jika tidak menggunakan timestamp

    public function fiturs()
    {
        // Berdasarkan struktur database di gambar
        return $this->hasMany(FiturB::class, 'ruang_id', 'ruang_id');
    }
}