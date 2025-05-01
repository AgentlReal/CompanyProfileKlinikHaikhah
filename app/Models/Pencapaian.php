<?php
//Tinggal benerin icon
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pencapaian extends Model
{
    protected $table = 'pencapaian';
    protected $fillable = ['tipe', 'value', 'unit','created_at'];
    public $timestamps = false;
}
