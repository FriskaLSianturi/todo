<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Produk::class, function (Faker $faker) {
    return [
        //
        'nama_produk'=> $faker->sentence(),
        'price'		 => $faker->sentence(),
        'deskripsi_produk' => $faker->paragraph() 
    ];
});
