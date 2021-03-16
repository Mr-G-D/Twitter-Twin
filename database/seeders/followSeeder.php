<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\follow;

class followSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->line("Seeding Follow List ....");
        $follow = new follow;
        $follow->user_id = "11";
        $follow->following_user_id = "6";
        $follow->save();

        $follow = new follow;
        $follow->user_id = "11";
        $follow->following_user_id = "2";
        $follow->save();

        $follow = new follow;
        $follow->user_id = "11";
        $follow->following_user_id = "3";
        $follow->save();

        $follow = new follow;
        $follow->user_id = "11";
        $follow->following_user_id = "4";
        $follow->save();

        $follow = new follow;
        $follow->user_id = "11";
        $follow->following_user_id = "5";
        $follow->save();

    }
}
