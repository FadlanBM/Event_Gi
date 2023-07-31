<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;
    protected $table="event";
    protected $fillable = [
                'name',
                'uraian',
                'tujuan',
                'tanggal',
                'waktu',
                'link_meet'
                // 'IsActive',
                // 'verified',
    
    ];
  
}
