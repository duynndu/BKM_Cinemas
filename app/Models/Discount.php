<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function movieDiscounts()
    {
        return $this->hasMany(MovieDiscount::class);
    }

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_discounts');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'movie_discounts');
    }
}
