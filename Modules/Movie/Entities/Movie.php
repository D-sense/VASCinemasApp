<?php

namespace Modules\Movie\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Showtime\Entities\Showtime;

class Movie extends Model
{
    protected $fillable = [
        'title', 'length', 'released_date', 
        'country', 'director', 'image', 'description', 
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    // public function showtimes(){
    //     return $this->hasMany(Showtime::class);
    // }
    

}
