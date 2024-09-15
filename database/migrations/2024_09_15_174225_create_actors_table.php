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
        // bảng diễn viên
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('birth_date'); // Ngày sinh
            $table->string('nationality'); // Quốc tịch
            $table->text('bio'); // Tiểu sử diễn viên
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actors');
    }
};
