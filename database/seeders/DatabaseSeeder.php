<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Constants\PermissionConstant;
use App\Constants\RoleConstant;
use App\Models\Banner;
use App\Models\Image;
use App\Models\RefreshToken;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Disable foreign key checks to truncate tables
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // Truncate tables
        User::truncate();
        RefreshToken::truncate();
        Role::truncate();
        Permission::truncate();

        // Enable foreign key checks again
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        // Create roles
        $roles = [
            // không cần liệt kê quyền vào đây vì mặc định sẽ được full
            RoleConstant::SUPPER_ADMIN => [],
            RoleConstant::ADMIN => [
                PermissionConstant::VIEW_USER,
                PermissionConstant::ADD_USER,
                PermissionConstant::EDIT_USER,
                PermissionConstant::DELETE_USER,
            ],
            RoleConstant::STAFF => [
                PermissionConstant::VIEW_USER,
                PermissionConstant::ADD_USER,
                PermissionConstant::EDIT_USER,
            ],
            RoleConstant::USER => [
                PermissionConstant::VIEW_USER,
            ]
        ];

        // Create permissions
        $permissions = [];
        foreach ($roles as $roleName => $permissionNames) {
            foreach ($permissionNames as $permissionName) {
                $permissions[$permissionName] = Permission::firstOrCreate(['name' => $permissionName]);
            }
        }

        // Create roles and assign permissions
        foreach ($roles as $roleName => $permissionNames) {
            $role = Role::create(['name' => $roleName]);
            if ($roleName == RoleConstant::SUPPER_ADMIN) {
                $role->syncPermissions(Permission::all());
            } else {
                foreach ($permissionNames as $permissionName) {
                    $role->givePermissionTo($permissions[$permissionName]);
                }
            }
        }

        // Create a user
        $user = User::factory()->create([
            'name' => 'Duynnz',
            'email' => 'duynnz@gmail.com',
            'phone' => '0968607305',
            'password' => Hash::make('1111'),
        ]);

        // Assign role to user
        $user->assignRole([RoleConstant::SUPPER_ADMIN]);
    }
}
