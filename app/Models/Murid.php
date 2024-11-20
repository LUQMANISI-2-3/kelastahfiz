<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;
    protected $primaryKey = 'idmurid';
    protected $fillable = [
        'idmurid',
        'namamurid',
        'tarikhlahir',
        'jantina',
        'kelas',
        'alamat',
        'status',
    ];
    protected $table = 'murids';
}
