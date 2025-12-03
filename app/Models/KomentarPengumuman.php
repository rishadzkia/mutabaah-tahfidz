<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KomentarPengumuman extends Model 
{ 
    protected $table = 'komentar_pengumuman';
    protected $fillable = [
        'pengumuman_id',
        'siswa_id',
        'komentar',
    ]; 

    public function pengumuman()
    {
        return $this->belongsTo(Pengumuman::class, 'pengumuman_id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
