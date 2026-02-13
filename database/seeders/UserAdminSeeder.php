<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'role'    => 'admin',
            'username'    => 'admin',
            'name'    => 'ADMIN',
            'email'    => 'admin@gmail.com',
            'password'    => Hash::make('12345678'),
        ]);
    }
}
