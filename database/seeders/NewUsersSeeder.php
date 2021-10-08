<?php

namespace Database\Seeders;

use App\User;
use Database\Factories\FakeUserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;


class NewUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // //
        // $faker = Faker::create();
        // $_roles = [1, 2, 3];
        // $_sts_id = ['active', 'suspended', 'verified', 'deleted'];




        // foreach(range(1, 100) as $index){
        //     DB::table('users')->insert([
        //       'email'    => $faker->name.'@nakwalify.com',
        //       'fname'     => $faker->name,
        //       'mname' => $faker->name,
        //       'lname' => $faker->name,
        //       'phonenumber'    => $faker->phoneNumber,
        //       'role_id' => $faker->randomElement($_roles),
        //       'added_by'       => 1,
        //       'status_id'       => $faker->randomElement($_sts_id),
        //       'email_verified_at' => now(),
        //       'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //       'remember_token' => Str::random(10),
        //       'date_created' => NOW(),
        //       'date_updated' => NOW()
        //     ]);

        //     }

    }
}
