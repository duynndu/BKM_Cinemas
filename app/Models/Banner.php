<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status',
        'is_active',
    ];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
