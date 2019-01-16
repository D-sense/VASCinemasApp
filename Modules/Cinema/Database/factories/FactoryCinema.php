<?php

use Faker\Generator as Faker;

$factory->define(Modules\Cinema\Entities\Cinema::class, function (Faker $faker) {
    return [
        'name' => 'Ozone',
        'address' => 'Festak road. Ojo Lagos',
    ];
});

