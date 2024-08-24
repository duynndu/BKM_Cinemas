<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Image extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function imageable()
    {
        return $this->morphTo();
    }

    // Thêm đoạn mã này đối với các bảng cần chứa ảnh
//    public function images()
//    {
//        return $this->morphMany(Image::class, 'imageable');
//    }
}
