<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable = [
        'user_id',
        'kelas',
        'angkatan',
        'guru_id',
    ];

    public function user(){
        return $this->belongsTo(Siswa::class);
    } 

   

    
}
