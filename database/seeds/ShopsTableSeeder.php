<?php

use App\Shop;
use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Shop::create([
                'name' => $faker->word,
                'description' => $faker->paragraph,
                'distance' => $faker->randomDigit,
                'image' => $faker->randomElement(['item-1.jpg', 'item-2.jpg', 'item-3.jpg']),
            ]);
        }
    }
}
