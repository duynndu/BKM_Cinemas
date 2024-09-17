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
        // Bảng thông báo của người dùng
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('image')->nullable();
            $table->string('title');  // Tiêu đề thông báo
            $table->text('content')->nullable(); // Nội dung thông báo
            $table->string('type'); // Loại thông báo: Vd: Sự kiện, Hệ thống, Đặt vé,...
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
