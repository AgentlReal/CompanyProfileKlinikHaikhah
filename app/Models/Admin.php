<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'user_table';
    protected $fillable = ['username, password'];
    protected $hidden = ['password'];
}