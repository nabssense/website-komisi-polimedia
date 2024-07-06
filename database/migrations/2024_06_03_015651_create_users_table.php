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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('profile_picture');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('nim')->nullable();
            $table->string('nik')->nullable();
            $table->string('number_wa')->nullable();
            $table->string('regional_campus')->nullable();
            $table->string('edu_program')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('user_type', ['Mahasiswa', 'Umum', 'Admin', 'Pembina Komisi']);
            // $table->string('kabinet_active');
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
            $table->enum('admin', ['Aktif', 'Tidak Aktif']);
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
