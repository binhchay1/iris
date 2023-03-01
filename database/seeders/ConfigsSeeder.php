<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Configs;

class ConfigsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configs::create([
            'type' => 'facebook',
            'note' => 'https:/facebook.com/',
        ]);

        Configs::create([
            'type' => 'insta',
            'note' => 'https:/instagram.com/',
        ]);

        Configs::create([
            'type' => 'youtube',
            'note' => 'https:/youtube.com/',
        ]);

        Configs::create([
            'type' => 'sdt',
            'note' => '123456789',
        ]);

        Configs::create([
            'type' => 'description',
            'note' => 'This is a description',
        ]);
    }
}
