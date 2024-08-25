<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class System extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(System::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(System::class, 'parent_id');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
