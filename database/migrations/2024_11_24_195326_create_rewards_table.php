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
        Schema::create('rewards', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Tên quà tặng
            $table->text('description')->nullable(); // Mô tả quà tặng
            $table->integer('points_required'); // Số điểm cần để đổi quà
            $table->string('image_path')->nullable(); // Đường dẫn hình ảnh của quà tặng (nếu có)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rewards');    
    }
};