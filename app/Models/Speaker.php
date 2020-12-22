<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    protected $table = 'speakers';
    protected $fillable = [
        'sname',
        'title',
        'email',
        'phone',
        'image'
    ];
    use HasFactory;
    
}
