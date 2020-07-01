<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;
$factory->define(Review::class, function (Faker $faker) {
    return [
      'product_id'=>$faker->numberBetween(1,302),
      'customer_name'=>$faker->word,
      'review'=>$faker->paragraph,
    ];
});
