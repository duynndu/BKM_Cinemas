<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';

    protected $guarded = [];

    const TYPE_ADMIN = 'admin';        // Admin tổng

    const TYPE_MANAGE = 'manage';      // Quản lý rạp

    const TYPE_STAFF = 'staff'; // Nhân viên

    const TYPE_MEMBER = 'member';      // Thành viên



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->type === self::TYPE_ADMIN; // Admin tổng
    }

    public function isManage()
    {
        return $this->type === self::TYPE_MANAGE; // Quản lý rạp
    }

    public function isStaff()
    {
        return $this->type === self::TYPE_STAFF; // Nhân viên
    }

    public function isMember()
    {
        return $this->type === self::TYPE_MEMBER; // Thành viên
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function permissions()
    {
        return $this->role ? $this->role->permissions : collect(); // Trả về collection rỗng nếu không có role
    }

    /**
     * Kiểm tra xem người dùng có quyền cụ thể nào không
     */
    public function isAdminGuard()
    {
        // Chỉ cho phép admin và staff
        return in_array($this->type, [
            self::TYPE_ADMIN,
            self::TYPE_MANAGE,
            self::TYPE_STAFF,
        ]);
    }

    public function hasPermission($permissionValue)
    {
        return $this->role->permissions->contains('value', $permissionValue);
    }
}
