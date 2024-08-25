<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Key extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'key_id');
    }

    public function parent()
    {
        return $this->belongsTo(Key::class, 'key_id');
    }

    public function children()
    {
        return $this->hasMany(Key::class, 'key_id');
    }
}
