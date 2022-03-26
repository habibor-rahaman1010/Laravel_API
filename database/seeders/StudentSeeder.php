<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker = Faker::create('en_GB');
        foreach(range(1, 100) as $value){
            DB::table('students')->insert([
                'name'=> $Faker->name(),
                'profile' => $Faker->image(),
                'address'=> $Faker->address(),
                'country'=> $Faker->country(),
                'city'=> $Faker->city(),
                'email'=> $Faker->email(),
                'phone'=> $Faker->randomNumber(),
            ]);
        }
    }
}
