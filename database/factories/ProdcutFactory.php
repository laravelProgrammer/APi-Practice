<?php

use Faker\Generator as Faker;
use App\Prodcut;
$factory->define(App\Prodcut::class, function (Faker $faker) {
    return [
        'name' =>$faker->word,
        'detail' =>$faker->paragraph,
        'price' =>$faker->numberBetween(100,1000),
        'stock' =>$faker->randomDigit,
        'discount' =>$faker->numberBetween(2,30),

    ];
});
