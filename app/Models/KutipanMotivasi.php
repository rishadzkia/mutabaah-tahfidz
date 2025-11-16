<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;
class KutipanMotivasi extends Model 
{
    protected $table = 'motivations';
   

    protected $fillable = [  
        'guru_id',
        'image_url',  
        'teks_kutipan',
        'sumber',
    ];

    public function motivasiGuru(){
        return $this->belongsTo(Guru::class);
    }
}
