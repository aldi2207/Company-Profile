<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

$timestamp = false;

class Member extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nama', 'email', 'nomor', 'umur', 'gender', 'nik'];
}
