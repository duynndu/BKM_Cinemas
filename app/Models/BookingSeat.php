<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookingSeat extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'booking_seats';

    protected $guarded = [];
}
