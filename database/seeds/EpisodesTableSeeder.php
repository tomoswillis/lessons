<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            [
                'id' => 1,
                'title' => 'The Walking Dead',
                'order' => '1',
                'released_at' => now()->subYears(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'South Park',
                'order' => '1',
                'released_at' => now()->subYears(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'You',
                'order' => '1',
                'released_at' => now()->subYears(1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'The Simpsons',
                'order' => '1',
                'released_at' => now()->subYears(20),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Stranger Things',
                'order' => '1',
                'released_at' => now()->subYears(2),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'SAS: Who Dares Wins',
                'order' => '1',
                'released_at' => now()->subYears(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'Rick and Morty',
                'order' => '1',
                'released_at' => now()->subYears(5),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
