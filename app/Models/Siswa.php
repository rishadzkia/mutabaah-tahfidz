<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = [
        'user_id',
        'kelas',
        'angkatan',
        'guru_id', 
        'image',
        
        'is_siswa',
    ];

    protected $casts = [
        'is_siswa' => 'boolean',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hafalan()
    {
    
        return $this->hasMany(Hafalan::class, 'siswa_id');
    }
}
