<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;
class KutipanMotivasi extends Model 
{
    protected $table = 'motivations';
   

    protected $fillable = [  
        'user_id',
        'image_url',  
        'teks_kutipan',
        'sumber',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
