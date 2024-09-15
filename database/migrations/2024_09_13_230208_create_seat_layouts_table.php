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
        Schema::create('seat_layouts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('col_count')->default(11);
            $table->integer('row_count')->default(10);
            $table->string('image')->nullable();
            $table->json('seats');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seat_layouts');
    }
};
