<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'id' => 1,
                'slug' => 'action',
                'title'=>"Action",
            ],
            [
                'id' => 2,
                'slug' => 'adult',
                'title'=>"Adult",
            ],
            [
                'id' => 3,
                'slug' => 'adventure',
                'title'=>"Adventure",
            ],
            [
                'id' => 4,
                'slug' => 'animation-anime',
                'title'=>"Animation / Anime",
            ],
            [
                'id' => 5,
                'slug' => 'biopic',
                'title'=>"Biopic",
            ],
            [
                'id' => 6,
                'slug' => 'childrens',
                'title'=>"Childrens",
            ],
            [
                'id' => 7,
                'slug' => 'comedy',
                'title'=>"Comedy",
            ],
            [
                'id' => 8,
                'slug' => 'crime-detective-spy',
                'title'=>"Crime / detective /spy",
            ],
            [
                'id' => 9,
                'slug' => 'documentary',
                'title'=>"Documentary",
            ],
            [
                'id' => 10,
                'slug' => 'drama',
                'title'=>"Drama",
            ],
            [
                'id' => 11,
                'slug' => 'horror',
                'title'=>"Horror",
            ],
            [
                'id' => 12,
                'slug' => 'family',
                'title'=>"Family",
            ],
            [
                'id' => 13,
                'slug' => 'fantasy',
                'title'=>"Fantasy",
            ],
            [
                'id' => 14,
                'slug' => 'historical',
                'title'=>"Historical",
            ],
            [
                'id' => 15,
                'slug' => 'medical',
                'title'=>"Medical",
            ],
            [
                'id' => 16,
                'slug' => 'musical',
                'title'=>"Musical",
            ],
            [
                'id' => 17,
                'slug' => 'paranormal',
                'title'=>"Paranormal",
            ],
            [
                'id' => 18,
                'slug' => 'romance',
                'title'=>"Romance",
            ],
            [
                'id' => 19,
                'slug' => 'sport',
                'title'=>"Sport",
            ],
            [
                'id' => 20,
                'slug' => 'science-fiction',
                'title'=>"Science fiction",
            ],
            [
                'id' => 21,
                'slug' => 'talk-show',
                'title'=>"Talk Show",
            ],
            [
                'id' => 22,
                'slug' => 'thriller-suspense',
                'title'=>"Thriller / Suspense",
            ],
            [
                'id' => 23,
                'slug' => 'war',
                'title'=>"War",
            ],
            [
                'id' => 24,
                'slug' => 'western',
                'title'=>"Western",
            ],
        ]);
    }
}
