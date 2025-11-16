<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;  

class Murottal extends Model 
{
   protected $table = 'murottals';
   protected $fillable = [
    'qari_name', 
    'surah',
    'file_url',
   ]; 
}


