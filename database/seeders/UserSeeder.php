<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate(['email' => 'udiptagogoi000@gmail.com'],[
           'name' => 'udipta gogoi',
           'email' => 'udiptagogoi000@gmail.com',
           'password' => Hash::make('123456'),
        ]);
    }
}
