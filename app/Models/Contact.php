<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['nama_lengkap', 'email', 'pesan', 'created_at', 'updated_at'];
}
