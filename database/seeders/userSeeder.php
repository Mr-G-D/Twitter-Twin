<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->command->line('Seeding Users from DeveloperAccess file...');
        $user = User::where('name', 'DINESH')->first();
        if(!$user) {
            $user = new User;
            $user->name = 'DINESH';
            $user->email = 'johndoe@test.com';
            $user->email_verified_at = now();
            $user->password = "$2y$10$6th3s4.RcDwUdTAgyfL9YejGvLsNXalcgQC/NAwQPD72eLc5bXpLe"; //You can use bcrypt() method to encrypt your password. Eg: bcrypt('mypassword');
            $user->save();
            $this->command->info("User created.");
        }
    }
}
