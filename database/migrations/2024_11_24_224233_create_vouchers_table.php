<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id(); // ID của voucher
            $table->string('code'); // Mã voucher duy nhất
            $table->string('image')->nullable();
            $table->string('name'); // Tên voucher
            $table->string('description')->nullable(); // Mô tả voucher
            $table->decimal('discount_value', 30, 0); // Giá trị giảm giá
            $table->enum('discount_condition', ['all', 'condition'])
                ->default('all'); // Điều kiện áp dụng: tất cả hoặc có điều kiện
            $table->enum('condition_type', ['new_member', 'birthday', 'level_up'])
                ->nullable();
                // Loại điều kiện: new_member: Thành viên mới, birthday: Sinh nhật, level_up: Lên Hạng
            $table->enum('level_type', ['vip', 'vvip'])
                ->nullable();
            $table->enum('discount_type', ['fixed', 'percentage'])
                ->default('fixed');
                // Loại giảm giá: cố định hoặc phần trăm
            $table->dateTime('start_date'); // Ngày bắt đầu áp dụng
            $table->dateTime('end_date'); // Ngày hết hạn áp dụng
            $table->integer('quantity')->nullable(); // null: vô hạn, > 0: Số lượt có thể tặng
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vouchers');
    }
};
