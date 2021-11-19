<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as faker;

class NarutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('naruto')->insert([
        //     'name'=>'Orochimaru',
        //     'power'=>'Snack',
        //     'city'=>'UNKNOWN',
        // ]);

        // $faker = Faker::create();
        // DB::table('employee')->insert([
        //     'name'=>$faker->name(),
        //     'email'=>$faker->email(),
        //     'password'=>$faker->password(),
        // ]);

        foreach(range(1,150) as $value){
            $faker = Faker::create();
            DB::table('employee')->insert([
                'name'=>$faker->name(),
                'email'=>$faker->email(),
                'password'=>$faker->password(),
            ]);
        }
    }
}
