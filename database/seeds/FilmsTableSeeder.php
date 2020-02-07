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
                'title' => 'Hot Fuzz',
                'released_at' => now()->subYears(10),
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Step Brothers',
                'released_at' => now()->subYears(10),
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Blades Of Glory',
                'released_at' => now()->subYears(14),
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The After Tomorrow',
                'released_at' => now()->subYears(12),
                'rating' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Saving Private Ryan',
                'released_at' => now()->subYears(21),
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ted',
                'released_at' => now()->subYears(5),
                'rating' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Love Actually',
                'released_at' => now()->subYears(20),
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
