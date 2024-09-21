<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlockContent extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'block_contents';

    protected $guarded = [];
}
