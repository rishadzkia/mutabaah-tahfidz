<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{

    protected $table='teachers';
    protected $fillable = [
        'user_id',  
        'foto_url',
        'mapel_diampu',
        'mulai_kerja', 
    ]; 

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
