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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('key')->default(2);
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable(false);
            $table->text('content')->nullable(false);
            $table->string('avatar')->nullable(false);
            $table->integer('order')->default(0)->nullable(false);
            $table->tinyInteger('hot')->default(0);
            $table->tinyInteger('active')->default(1);
            $table->string('title_seo')->nullable(false);
            $table->string('description_seo')->nullable(false);
            $table->string('keyword_seo')->nullable(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
