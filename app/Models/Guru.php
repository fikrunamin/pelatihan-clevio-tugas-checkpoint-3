<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guru extends Model
{
    use HasFactory;
    protected $fillable = ['nim', 'gambar_profil', 'nama', 'mata_pelajaran_id', 'tempat_lahir', 'tanggal_lahir'];

    public function mata_pelajaran(){
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran_id');
    }
}
