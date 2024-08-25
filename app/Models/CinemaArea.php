<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CinemaArea extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
