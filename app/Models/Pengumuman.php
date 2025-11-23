<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model 
{
   protected $table = 'pengumuman';
   protected $fillable = [  
    'guru_id',
    'judul', 
    'isi', 
   ]; 

   public function guru(){  
    return $this->belongsTo(Guru::class, 'guru_id'); 
   }  

} 

