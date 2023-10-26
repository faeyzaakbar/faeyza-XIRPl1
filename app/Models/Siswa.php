<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = ['nis',
    'nama',
    'jenis_kelamin',
    'alamat',
    'tanggal_lahir',
        ];

    protected $table = 'siswa';
}
