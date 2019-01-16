<?php

namespace Modules\Cinema\Entities;

use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $fillable = [
        'name', 'address'
    ];
}
