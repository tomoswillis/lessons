<?php

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
        $this->call(FilmsTableSeeder::class);
        $this->call(ShowsTableSeeder::class);
        $this->call(EpisodesTableSeeder::class);   
        $this->call(GenresTableSeeder::class);
    }
}
