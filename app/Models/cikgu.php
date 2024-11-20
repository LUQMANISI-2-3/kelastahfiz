<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cikgu extends Model
{
    use HasFactory;
    protected $fillable = [
        'idcikgu',
        'namacikgu',
        'tarikhlahir',
        'jantina',
        'pendidikan',
        'alamat',
        'status'
        'created_at',
    ];
}
