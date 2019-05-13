<?php

use Faker\Generator as Faker;
use App\Prodcut;
$factory->define(App\Review::class, function (Faker $faker) {
    return [

        'prodcut_id' =>function(){
            return Prodcut::all()->random();
        },

        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' =>$faker->numberBetween(0,5)
    ];
});
