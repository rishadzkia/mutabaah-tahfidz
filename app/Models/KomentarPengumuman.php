<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KomentarPengumuman extends Model
{
    protected $fillable = [
        'pengumuman_id',
        'siswa_id',
        'komentar',

    ];

    public function pengumuman(){
        return $this->belongsTo(Pengumuman::class);
    }

    public function siswaBerkomentar(){
        return $this->belongsTo(Siswa::class);
    }
}
