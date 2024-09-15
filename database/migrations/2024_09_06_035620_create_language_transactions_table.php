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
        Schema::create('language_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('board_id'); // id bản ghi của bảng cần dịch
            $table->bigInteger('language_id'); // id của ngôn ngữ
            $table->string('board_type'); // Tên mô hình cần dịch lưu Vd: App\Models\Post, App\Models\Product, App\Models\Menu...
            $table->string('field_name'); // Tên trường của mô hình cần dịch (ví dụ: 'name', 'description').
            $table->text('translated_value')->nullable(); // Tên giá trị được dịch (ví dụ: 'Sản phẩm 1', 'Mô tả 1').
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('language_transactions');
    }
};
