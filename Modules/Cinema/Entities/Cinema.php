<?php

namespace Modules\Cinema\Entities;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $fillable = [
        'name', 'address'
    ];

    public function showtime(){
        return $this->hasMany(Showtime::class);
    }

    // public function movies(){
    //     return $this->belongsTo(Movie::class);
    // }
}
