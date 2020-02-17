<?php

namespace App\Domain\Episodes;

use Illuminate\Database\Eloquent\Model;

use App\Domain\Shows\Show;

class Episode extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description'];

    public function show()
    {
        return $this->belongsTo(Show::class);
    }
}
