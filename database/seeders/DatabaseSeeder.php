<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Constants\PermissionConstant;
use App\Constants\RoleConstant;
use App\Constants\SeatType;
use App\Models\Area;
use App\Models\Banner;
use App\Models\Cinema;
use App\Models\City;
use App\Models\Food;
use App\Models\FoodType;
use App\Models\Image;
use App\Models\Movie;
use App\Models\RefreshToken;
use App\Models\Room;
use App\Models\Showtime;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
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

        $seatTypes = [
            [
                'code' => SeatType::EMPTY_SEAT,
                'bonus_price' => 0,
                'text' => 'Trống',
                'color' => '#000000',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/><path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/></svg>',
                'is_system' => true,
            ],
            [
                'code' => SeatType::STANDARD_SEAT,
                'bonus_price' => 0,
                'text' => 'Ghế mặc định',
                'color' => '#FFFFFF',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM2 14s-1 0-1-1 1-4 7-4 7 3 7 4-1 1-1 1H2z"/></svg>',
                'is_system' => true,
            ],
            [
                'code' => SeatType::COUPLE_SEAT,
                'bonus_price' => 15000.00,
                'text' => 'Ghế cặp',
                'color' => '#FFB6C1',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16"><path d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.414-2.368 5.327-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01z"/></svg>',
                'is_system' => true,
            ],
            [
                'code' => SeatType::VIP_SEAT,
                'bonus_price' => 10000.00,
                'text' => 'Ghế VIP',
                'color' => '#FFD700',
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.32-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.63.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>',
                'is_system' => true,
            ],
            [
                'code' => SeatType::ACCESSIBLE_SEAT,
                'bonus_price' => 20000.00,
                'text' => 'Ghế cho người khuyết tật',
                'color' => '#32CD32',
                'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-wheelchair" viewBox="0 0 16 16"><path d="M12 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3m-.663 2.146a1.5 1.5 0 0 0-.47-2.115l-2.5-1.508a1.5 1.5 0 0 0-1.676.086l-2.329 1.75a.866.866 0 0 0 1.051 1.375L7.361 3.37l.922.71-2.038 2.445A4.73 4.73 0 0 0 2.628 7.67l1.064 1.065a3.25 3.25 0 0 1 4.574 4.574l1.064 1.063a4.73 4.73 0 0 0 1.09-3.998l1.043-.292-.187 2.991a.872.872 0 1 0 1.741.098l.206-4.121A1 1 0 0 0 12.224 8h-2.79zM3.023 9.48a3.25 3.25 0 0 0 4.496 4.496l1.077 1.077a4.75 4.75 0 0 1-6.65-6.65z"/></svg>'
            ],
        ];
        foreach ($seatTypes as $seatType) {
            DB::table('seat_types')->insert([
                'code' => $seatType['code'],
                'bonus_price' => $seatType['bonus_price'],
                'text' => $seatType['text'],
                'color' => $seatType['color'],
                'icon' => $seatType['icon'],
                'is_system' => $seatType['is_system'] ?? false,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        City::create([
            'name' => 'Hà Nội',
        ]);
        Area::create([
            'city_id' => 1,
            'name' => 'Quận Cầu Giấy',
        ]);
        Cinema::create([
            'area_id' => 1,
            'name' => 'Rạp test',
            'image' => 'path/to/image.jpg',
            'address' => '123 Cinema Street',
            'phone' => '123-456-7890',
            'email' => 'contact@cinema.com',
            'map' => 'Map details or URL',
            'description' => 'A brief description of the cinema',
            'active' => 1,
        ]);
        $timeSlots = [
            'morning' => ['08:00', '10:00'],
            'afternoon' => ['13:00', '15:00'],
            'evening' => ['18:00', '20:00'],
        ];
        foreach (range(0, 4) as $dayOffset) {
            $date = Carbon::now()->addDays($dayOffset);
            foreach ($timeSlots as $slot) {
                $numberOfRecords = rand(1, 2);
                foreach (range(0, $numberOfRecords - 1) as $i) {
                    $startTime = $date->copy()->setTimeFromTimeString($slot[0])->addMinutes($i * 30); // Adjust start time
                    $endTime = $startTime->copy()->addHours(2);

                    Showtime::create([
                        'room_id' => 1,
                        'cinema_id' => 1,
                        'movie_id' => 1,
                        'start_time' => $startTime,
                        'end_time' => $endTime,
                    ]);
                }
            }
        }
        Room::create([
            'cinema_id' => 1,
            'room_name' => 'Phòng 1',
            'image' => 'path/to/image.jpg',
            'base_price' => 50000,
            'col_count' => 11,
            'row_count' => 10,
        ]);
        Movie::create([
            'id' => 1,
            'title' => 'Phế vật chuyển sinh thành súc sinh',
            'slug' => 'movie-slug',
            'image' => 'https://touchcinema.com/uploads/slider-app/300wx450h-cam-1-poster.jpg',
            'banner_movie' => 'path/to/movie/banner.jpg',
            'description' => 'Movie description',
            'content' => 'Movie content',
            'duration' => 120, // in minutes
            'director' => 'Director Name',
            'trailer_url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ',
            'format' => '2D',
            'age' => 18,
            'release_date' => '2022-01-01',
            'premiere_date' => '2022-01-01',
            'country' => 'USA',
            'language' => 'English',
            'order' => 1,
            'hot' => true,
            'active' => true
        ]);
        User::create([
            'cinema_id' => 1,
            'name' => 'admin',
            'email' => 'demo@gmail.com',
            'password' => bcrypt('1111'),
            'type' => 'admin',
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create([
            'cinema_id' => 1,
            'name' => 'duynnz',
            'email' => 'duynnz@gmail.com',
            'password' => bcrypt('1111'),
            'type' => 'admin',
            'role_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $foodTypes = ['Combo', 'Đồ ăn', 'Đồ uống'];
        foreach ($foodTypes as $foodType) {
            FoodType::create([
                'name' => $foodType,
            ]);
        }
        $foods = ['Combo 1', 'Combo 2', 'Combo 3'];
        foreach ($foods as $key => $food) {
            Food::create([
                'food_type_id' => $key + 1,
                'name' => $food,
                'price' => 50000,
            ]);
        }
    }
}
