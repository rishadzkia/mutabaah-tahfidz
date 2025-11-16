<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'students';
    protected $fillable = [
        'user_id',
        'kelas',
        'angkatan',
        'guru_id',
        'is_siswa',
    ];

    protected $casts = [
        'is_siswa' => 'boolean',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    } 

   

    
}
