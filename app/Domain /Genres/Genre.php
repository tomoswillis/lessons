<?php

namespace App\Domain\Genres;

use Illuminate\Database\Eloquent\Model;

use App\Domain\Shows\Show;
use App\Domain\Films\Film;

class Genre extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'slug'];

    public function shows()
    {
        return $this->hasMany(show::class);
    }
   
    public function films()
    {
        return $this->hasMany(film::class);
    }
}
