<?php

namespace Database\Seeders;

use App\Models\Shows;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shows::factory()->times(25)->create();
    }
}
