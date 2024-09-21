<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // bảng trung gian giữa phim và diễn viên
        Schema::create('movie_actor', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('movie_id');
            $table->bigInteger('actor_id');
            $table->bigInteger('role'); // Vai diễn của diễn viên trong phim
            $table->integer('order'); // Thứ tự xuất hiện của diễn viên trong phim
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie_actor');
    }
};
