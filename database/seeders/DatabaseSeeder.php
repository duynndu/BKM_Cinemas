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
        $fileLayoutSeats = ['heart.json', 'seats.json'];
        foreach ($fileLayoutSeats as $file) {
            DB::table('seat_layouts')->insert([
                'name' => $file,
                'col_count' => 11,
                'row_count' => 10,
                'seats' => file_get_contents(storage_path('app/public/schemas/' . $file)),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
