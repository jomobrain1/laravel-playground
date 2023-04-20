<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        foreach (range(1,100) as $index) {
            DB::table('posts')->insert([
             "title"=>$faker->sentence(5),
             "body"=>$faker->paragraph(2),
             "user_id"=>Arr::random([1,2,3])
            ]);
        }
    }
}
