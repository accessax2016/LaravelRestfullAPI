<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'detail' => $faker->text,
        'price' => $faker->numberBetween(100, 1000),
        'stock' => $faker->numberBetween(0, 100),
        'discount' => $faker->numberBetween(5, 30),
    ];
});
