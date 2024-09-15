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
        // Bảng vai trò
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Ví dụ: (Admin Tổng, Bộ phận frontend, Bộ phận backend, Trưởng phòng, Nhân viên, Cộng tác viên,...)
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
