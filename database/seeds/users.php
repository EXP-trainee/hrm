<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        $data = [];
        
        for ($i = 1; $i <= 1 ; $i++) {
            array_push($data, [
                'name'     => 'exp',
                'email'    => 'test@example.com',
                'password' => bcrypt('12345678'),
            ]);
        }

        for ($i = 1; $i <= 10 ; $i++) {
            array_push($data, [
                'name'     => $faker->name(),
                'email'    => $faker->email,
                'password' => bcrypt('12345678'),
            ]);
        }
        
        User::insert($data);
    }
}
