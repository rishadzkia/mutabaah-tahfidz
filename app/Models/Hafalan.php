<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hafalan extends Model 
{ 
    protected $table = 'hafalan';
    protected $fillable = [
        'siswa_id', 
        'guru_id', 
        'surah', 
        'juz',
        'ayat',
        'status',
        // 'is_siswa',
        'created_at',
 
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
    // public function user()
    // {
    //     return $this->siswa->user();
    // }
}
