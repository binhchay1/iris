<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Themes;

class ThemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Themes::create([
            'name' => 'Slide 1',
            'type' => 'slide-1',
            'url' => 'img/1280x1252.png',
        ]);

        Themes::create([
            'name' => 'Slide 2',
            'type' => 'slide-2',
            'url' => 'img/1280x1252.png',
        ]);

        Themes::create([
            'name' => 'Slide 3',
            'type' => 'slide-3',
            'url' => 'img/1280x1252.png',
        ]);

        Themes::create([
            'name' => 'Slide 4',
            'type' => 'slide-4',
            'url' => 'img/1280x1252.png',
        ]);
    }
}
