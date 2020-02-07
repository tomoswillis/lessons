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
                'title' => 'Hot Fuzz',
                'released_at' => now()->subYears(10),
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'title' => 'Step Brothers',
                'released_at' => now()->subYears(10),
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'title' => 'Blades Of Glory',
                'released_at' => now()->subYears(14),
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'title' => 'The After Tomorrow',
                'released_at' => now()->subYears(12),
                'rating' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'title' => 'Saving Private Ryan',
                'released_at' => now()->subYears(21),
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'title' => 'Ted',
                'released_at' => now()->subYears(5),
                'rating' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'title' => 'Love Actually',
                'released_at' => now()->subYears(20),
                'rating' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
