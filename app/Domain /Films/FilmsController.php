<?php

namespace App\Domain\Films; 

use App\Http\Controllers\Controller;

class FilmsController extends Controller
{
    public function index()
    {
        $model = [
            'films' => Film::all()->map(function ($film) {
                return [
                    'id' => $film->id,
                    'title' => $film->title,
                    'genre' => $film->genre->title,
                    'url' => route('films.show', $film->slug),
                ];
            }),
        ];

        return view('app/films/index')->with(compact('model'));
    }
}