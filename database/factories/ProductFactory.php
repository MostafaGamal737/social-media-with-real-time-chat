<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'price'=>$faker->numberBetween(100,1500),
        'discount'=>$faker->numberBetween(10,50),
        'detail'=>$faker->paragraph,
        'user_id'=>$faker->numberBetween(1,20),

    ];
});
