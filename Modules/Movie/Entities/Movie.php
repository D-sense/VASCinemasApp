<?php

namespace Modules\Movie\Entities;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title', 'length', 'year', 
        'country', 'director', 'image', 'description', 
        'user_id',
    ];
}
