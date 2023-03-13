<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\App\Models\Movie;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MovieSeeder::class);
        $this->call(GenreSeeder::class);

        $this->call(ShowsSeeder::class);
        $this->call(EpisodeSeeder::class);
    }
}
