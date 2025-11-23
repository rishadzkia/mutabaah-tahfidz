<?php

namespace App\Models; 

use Illuminate\Database\Eloquent\Model;  

class Murottal extends Model 
{
   protected $table = 'murottal';
   protected $fillable = [
    'qari_name', 
    'surah',
    'file_url',
   ]; 
}


