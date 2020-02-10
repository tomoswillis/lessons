<?php

namespace App\Domain\Shows;

use Illuminate\Database\Eloquent\Model;

use App\Domain\Episodes\Episode;

class Show extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'rating'];

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }
}
