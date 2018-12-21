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

$factory->define(App\Barang::class, function (Faker $faker) {
    return [
    	'po_id' => function () {
            return factory(App\Po::class)->create()->id;
        },
        'nama'  => $faker->name,
        'jumlah' => $faker->numberBetween(1, 10),
        'satuan' => str_random(4),
        'harga' => $faker->numberBetween(100000, 5000000),
    ];
});