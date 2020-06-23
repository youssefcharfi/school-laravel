<?php

use App\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nbUsers = (int)$this->command->ask("How many of user you want generate ?", 10);

        factory(User::class,  $nbUsers)->create();
    }
}
