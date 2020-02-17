<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            [
                'id' => 1,
                'title' => 'Hot Fuzz',
                'slug' => 'hot-fuzz',
                'released_at' => now()->subYears(10),
                'rating' => 5,
                // TODO: order to match database schema 
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Step Brothers',
                'slug' => 'step-brothers',
                'released_at' => now()->subYears(10),
                'rating' => 5,
                'genre_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Blades Of Glory',
                'slug' => 'blades-of-glory',
                'released_at' => now()->subYears(14),
                'rating' => 4,
                'genre_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'The Day After Tomorrow',
                'slug' => 'the-day-after-tomorrow',
                'released_at' => now()->subYears(12),
                'rating' => 2,
                'genre_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Saving Private Ryan',
                'slug' => 'saving-private-ryan',
                'released_at' => now()->subYears(21),
                'rating' => 5,
                'genre_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'Ted',
                'slug' => 'ted',
                'released_at' => now()->subYears(5),
                'rating' => 3,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'Love Actually',
                'slug' => 'love-actually',
                'released_at' => now()->subYears(20),
                'rating' => 4,
                'genre_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
