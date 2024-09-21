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
        // Bảng đặt vé
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('movie_id'); // id phim
            $table->bigInteger('showtime_id'); // Thời điểm chiếu (khung giờ chiếu)
            $table->bigInteger('user_id'); // Người đặt vé
            $table->bigInteger('payment_id'); // id hình thức thanh toán
            $table->decimal('total_price', 10, 2); // Tổng tiền
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
