<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'cast' => 'json',
    ];

    public function movieDiscounts()
    {
        return $this->hasMany(MovieDiscount::class);
    }

    public function discounts()
    {
        return $this->belongsToMany(Discount::class, 'movie_discounts');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
