<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@silikit.vn',
            'email_verified_at' => '2023-02-14 18:29:56',
            'password' => Hash::make('123456'),
            'created_at' => '2023-02-14 18:29:56',
            'updated_at' => '2023-02-14 18:29:56',
        ]);
    }
}
