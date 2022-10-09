<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           "name"=>"User Name",
           "email"=>"User@gmail.com",
            'Password' => bcrypt('123456789'),
            ]);
    }
}
