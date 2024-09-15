<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Bảng người dùng
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('role_id'); // id vai trò tài khoản
            $table->string('image')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->decimal('balance', 10, 2); // số dư tài khoản
            $table->decimal('total_deposit', 10, 2); // Tổng số tiền đã nạp vào (Dự vào đây để set rank)
            $table->tinyInteger('status')->default(1);  // 1: Đang hoạt động, 2: Bị khóa
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
