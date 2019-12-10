<?php

// /** @var \Illuminate\Database\Eloquent\Factory $factory */
//
// use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
      "title" => $faker->title,
      "description" => $faker->text,
      "price" => $faker->numberBetween(100, 500),
    ];
});
