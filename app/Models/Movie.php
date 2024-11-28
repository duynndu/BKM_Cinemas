<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'movies';

    protected $guarded = [];

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'movie_actors')->withPivot('role');
    }


    public function movieActor()
    {
        return $this->hasMany(MovieActor::class, 'movie_id', 'id');
    }

    public function movieGenre()
    {
        return $this->hasMany(MovieGenre::class, 'movie_id', 'id');
    }

    public function showtimes()
    {
        return $this->hasMany(Showtime::class);
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'showtimes');
    }
}
