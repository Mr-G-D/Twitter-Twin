<?php

namespace Database\Seeders;

use App\Models\User;
use Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker;

class tweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Faker = Faker::create();
        foreach (range(1,10) as $value) {
            DB::table('tweets')->insert([
                'user_id'=>  User::factory()->create()->id,
                
                'body'=> $Faker-> realText
            ]);
            # code...
        }

    }
}
