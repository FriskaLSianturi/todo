<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(\App\Todo::class, function (Faker $faker) {
    return [
        //
        'name' 			=> $faker->sentence(3),//contain 3 words
        'description' 	=> $faker->paragraph(4),//contain 4 sentence
        'completed'		=> false
    ];
});
