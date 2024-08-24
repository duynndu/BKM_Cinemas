<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cinema extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function cinemaArea(){
        return $this->hasMany(CinemaArea::class);
    }

    public function cities()
    {
        return $this->belongsToMany(City::class, 'cinema_areas');
    }

    public function rooms()
    {
        return $this->hasMany(City::class);
    }
}
