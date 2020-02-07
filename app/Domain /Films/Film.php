<?php

namespace App\Domain\Films;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'rating'];
}
