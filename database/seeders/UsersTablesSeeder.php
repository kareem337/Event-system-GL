<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        //
        User::create([
            'name' => 'John Smith',
            'email' => 'john_smith@gmail.com',
            'email_verified_at' => now()->timestamp,
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ]);
    }
}
