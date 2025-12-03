<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ResponseHafalan extends Model
{
    protected $table = 'response_hafalan';
    protected $fillable = [
        'guru_id',
        'hafalan_id',
        'is_marked', 
    ];

    protected $casts = [ 
        'is_marked' => 'boolean',
    ];

    public function guru()
    {
  
        
        return $this->belongsTo(Guru::class, 'guru_id');
    }

    public function hafalan()
    {
        
        return $this->belongsTo(Hafalan::class, 'hafalan_id');
    }
}
