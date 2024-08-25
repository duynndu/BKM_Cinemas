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
        Schema::create('movies', function (Blueprint $table) {
            Schema::create('movies', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('title')->nullable();
                $table->string('avatar_path')->nullable();
                $table->string('description')->nullable();
                $table->text('content')->nullable();
                $table->integer('duration')->nullable();
                $table->string('director')->nullable();
                $table->json('cast')->nullable();
                $table->string('trailer_url')->nullable();
                $table->string('language')->nullable();
                $table->date('release_date')->nullable();
                $table->string('country')->nullable();
                $table->string('genre')->nullable();
                $table->integer('order')->nullable();
                $table->tinyInteger('hot')->default(0);
                $table->tinyInteger('active')->default(1);
                $table->timestamps();
                $table->softDeletes();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
