<?php

namespace App\Domain\Films; 

use App\Http\Controllers\Controller;

class FilmsController extends Controller
{
    public function index()
    {
        $films = Film::query()
            ->where('title', 'Hot Fuzz')
            ->orderBy('created_at', 'asc')
            ->first();

        dd($films);
    }
}