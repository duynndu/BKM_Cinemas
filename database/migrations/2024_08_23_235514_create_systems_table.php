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
        Schema::create('systems', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable(false);
            $table->text('content')->nullable(false);
            $table->integer('order')->default(0)->nullable(false);
            $table->tinyInteger('active')->default(1);
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();

//            $table->foreign('parent_id')->references('id')->on('systems');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('systems');
    }
};
