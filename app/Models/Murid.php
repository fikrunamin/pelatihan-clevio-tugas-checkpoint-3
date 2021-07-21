<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Murid extends Model
{
    use HasFactory;
    protected $fillable = ['nis', 'gambar_profil', 'nama', 'kelas', 'jurusan', 'tempat_lahir', 'tanggal_lahir'];
}
