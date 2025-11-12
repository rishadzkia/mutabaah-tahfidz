<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuruMarkSiswa extends Model
{   
    
    protected $fillable = [ 
        'guru_id',
        'siswa_id', 
    ];

    public function guruMark(){  
        return $this->belongsTo(Guru::class);
    }

    public function siswaMarked(){
        return $this->belongsTo(Siswa::class);
    }
}
