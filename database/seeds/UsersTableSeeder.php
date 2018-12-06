<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        User::create([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2a$04$TOy3wu9MQDdLKQU7xq.VluNMem1bb7.ZywOVMG6jKqeR4qwwStdjS', // 123456789
            'remember_token' => str_random(10)
        ]);
    }
}
