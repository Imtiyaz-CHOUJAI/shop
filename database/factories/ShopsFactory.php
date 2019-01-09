<?php

use Faker\Generator as Faker;

$factory->define(App\Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->paragraph,
        'distance' => $faker->randomDigit,
        'image' => $faker->randomElement(['item-1.jpg', 'item-2.jpg', 'item-3.jpg'])
    ];
});
