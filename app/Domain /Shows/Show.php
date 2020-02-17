<?php

namespace App\Domain\Shows;

use Illuminate\Database\Eloquent\Model;

use App\Domain\Episodes\Episode;
use App\Domain\Genres\Genre;


class Show extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug', 'description', 'rating'];

    public function genre() 
    {
        return $this->belongsTo(Genre::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
