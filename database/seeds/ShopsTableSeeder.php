<?php

use Illuminate\Database\Seeder;
use App\Shop;

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
                'distance' => $faker->randomDigit
            ]);
        }
    }
}
