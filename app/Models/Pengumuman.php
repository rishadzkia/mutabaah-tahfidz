<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model 
{
   protected $table = 'announcements';
   protected $fillable = [  
    'guru_id',
    'judul', 
    'isi', 
   ]; 

   public function guruBeriPengumuman(){  
    return $this->belongsTo(Guru::class); 
   }  

} 

