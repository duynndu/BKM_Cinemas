<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function cinemaArea(){
        return $this->hasMany(CinemaArea::class);
    }

    public function cinemas()
    {
        return $this->belongsToMany(Cinema::class, 'cinema_areas');
    }
}
