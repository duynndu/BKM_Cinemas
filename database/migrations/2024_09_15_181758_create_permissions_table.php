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
        // Bảng chức năng
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('module_id'); // id module
            $table->string('name'); // Ví dụ: (Xem, Them, Sua, Xoa, Thay đổi, ...)
            $table->text('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permissions');
    }
};
