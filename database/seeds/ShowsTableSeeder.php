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
                'released_at' => now()->subYears(10),
                'rating' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'South Park',
                'released_at' => now()->subYears(10),
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'You',
                'released_at' => now()->subYears(1),
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'The Simpsons',
                'released_at' => now()->subYears(20),
                'rating' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Stranger Things',
                'released_at' => now()->subYears(2),
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'SAS: Who Dares Wins',
                'released_at' => now()->subYears(5),
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'Rick and Morty',
                'released_at' => now()->subYears(5),
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
