<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shedule extends Model
{
    protected $table = 'shedules';
    protected $fillable = [
        'speaker_id',
        'envent_id',
        'startt',
        'endt'
    ];
    use HasFactory;
    
}
