<?php

namespace Modules\Showtime\Entities;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $fillable = [
        'cinema_id', 'movie_id', 'show_date', 'show_time',
    ];

    public function cinema(){
        return $this->hasMany()(Cinema::class);
    }

    public function movie(){
        return $this->hasMany(Movie::class);
    }

}
