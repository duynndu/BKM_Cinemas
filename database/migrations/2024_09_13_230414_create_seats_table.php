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
        Schema::create('seats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('room_id');
            $table->string('seat_number');
            $table->decimal('price', 10, 2)->default(0);
            $table->tinyInteger('type')->default(1);
            $table->tinyInteger('slot')->default(1);
            $table->tinyInteger('visible')->default(1);
            $table->json('merged_seats');
            $table->integer('order')->default(null);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seats');
    }
};
