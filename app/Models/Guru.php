<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $fillable = [
        'user_id',  
        'foto_url',
        'mapel_diampu',
        'mulai_kerja',
    ];

    public function user()
    {
        return $this->belongsTo(Guru::class);
    }
}
