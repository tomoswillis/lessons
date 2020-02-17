<?php

namespace App\Domain\Films;

use Illuminate\Database\Eloquent\Model;

use App\Domain\Genres\Genre;
class Film extends Model
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
}