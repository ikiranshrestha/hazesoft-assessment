<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name'    => 'John Smith',
        //     'email'    => 'john_smith@gmail.com',
        //     'password'   =>  Hash::make('password'),
        //     'remember_token' =>  str_random(10),
        // ]);
    }
}
