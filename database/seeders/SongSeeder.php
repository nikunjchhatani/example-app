<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Seed a few songs
        Song::create([
            'Serial No' => '1'
            'artist' => 'Eminem',
            'title' => 'Stan',
            'duration' => '3:30',
        ]);

        Song::create([
            'Serial No' => '2'
            'artist' => 'A P Dhillon',
            'title' => 'With You',
            'duration' => '4:15',
        ]);

    }
}
