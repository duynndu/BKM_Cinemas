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
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cinema_id');
            $table->string('room_name');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('cinema_id')->references('id')->on('cinemas');
            // $table->foreign('seat_layout_id')->references('id')->on('seat_layouts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
