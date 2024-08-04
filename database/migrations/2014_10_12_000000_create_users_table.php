<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
//        // Tạo bảng vai trò (roles)
//        Schema::create('roles', function (Blueprint $table) {
//            $table->id();
//            $table->string('name');
//            $table->string('description')->nullable();
//            $table->timestamps();
//        });
//
//        // Tạo bảng chức năng (permissions)
//        Schema::create('permissions', function (Blueprint $table) {
//            $table->id();
//            $table->string('name');
//            $table->string('description')->nullable();
//            $table->timestamps();
//        });
//
//        // Tạo bảng phân quyền (role_permissions)
//        Schema::create('permission_role', function (Blueprint $table) {
//            $table->id();
//            $table->foreignId('role_id')->constrained()->onDelete('cascade');
//            $table->foreignId('permission_id')->constrained()->onDelete('cascade');
//            $table->timestamps();
//        });

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
//            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
//        DB::statement('DROP FOREIGN KEY refresh_tokens_user_id_foreign ON refresh_tokens');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('functions');
        Schema::dropIfExists('role_functions');
        Schema::dropIfExists('users');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
