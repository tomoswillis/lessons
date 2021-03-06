<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shows')->insert([
            [
                'id' => 1,
                'title' => 'The Walking Dead',
                'slug' => 'the-walking-dead',
                'released_at' => now()->subYears(10),
                'rating' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'South Park',
                'slug' => 'south-park',
                'released_at' => now()->subYears(10),
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'You',
                'slug' => 'you',
                'released_at' => now()->subYears(1),
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'The Simpsons',
                'slug' => 'the-simpsons',
                'released_at' => now()->subYears(20),
                'rating' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Stranger Things',
                'slug' => 'stranger-things',
                'released_at' => now()->subYears(2),
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'SAS: Who Dares Wins',
                'slug' => 'sas-who-dares-wins',
                'released_at' => now()->subYears(5),
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'Rick and Morty',
                'slug' => 'rick-and-morty',
                'released_at' => now()->subYears(5),
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
