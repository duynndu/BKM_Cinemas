<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'roles';

    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class, 'id', 'role_id');
    }

    // Mối quan hệ với Permission: nhiều-nhiều
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permission', 'role_id', 'permission_id');
    }
}
