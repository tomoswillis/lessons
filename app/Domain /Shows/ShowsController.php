<?php

namespace App\Domain\Shows; 

use App\Http\Controllers\Controller;

class ShowsController extends Controller
{
    public function index()
    {
        return Show::all();
    }
}