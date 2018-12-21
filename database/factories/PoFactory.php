<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Po::class, function (Faker $faker) {
    return [
        'nomor' => $faker->numberBetween(900000, 5000000), 
        'nama_vendor' => $faker->name,
        'tanggal_po' => $faker->dateTime,
        'tanggal_kirim' => $faker->dateTime,
        'status' =>$faker->text,
    ];
});