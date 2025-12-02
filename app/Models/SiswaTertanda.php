<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiswaTertanda extends Model
{
    use HasFactory;

    protected $table = 'siswa_tertanda';
 
    protected $fillable = [
        'siswa_id',
        'guru_id',
        'hafalan_id',
        'keterangan',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function hafalan()
    {
        return $this->belongsTo(Hafalan::class);
    }
}
