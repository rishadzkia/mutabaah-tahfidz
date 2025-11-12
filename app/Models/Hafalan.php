<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model
{
    protected $fillable = [
        'siswa_id',
        'guru_id',
        'surah',
        'juz',
        'ayat',
        'status',

    ];

    public function siswaInput(){
        return $this->belongsTo(Siswa::class);
    }

    public function guruMenilai(){
        return $this->belongsTo(Guru::class);    
    }
}
