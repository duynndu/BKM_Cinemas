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
        Schema::create('discounts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('discount_type', ['balance', 'percent']);
            $table->double('balance');
            $table->integer('percent');
            $table->datetime('start_date');
            $table->datetime('end_date');
            $table->string('code');
            $table->double('min_order_value');
            $table->double('max_discount_amount');
            $table->integer('usage_limit');
            $table->integer('usage_count');
            $table->tinyInteger('status');
            $table->bigInteger('payment_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

//            $table->foreign('payment_id')->references('id')->on('payments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discounts');
    }
};
