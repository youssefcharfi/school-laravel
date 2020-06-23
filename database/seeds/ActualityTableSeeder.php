<?php

use App\User;
use App\Actuality;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActualityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        $users = DB::table('users')->where('isAdmin',1)->get();

        $faker = Factory::create();
        for($i=1 ; $i<=10 ; $i++){
            Actuality::create([
                'title' => $faker->sentence(5),
                'content' => $faker->sentence(10),
                'user_id' => $users->random()->id
            ]);
        }
    }
}
