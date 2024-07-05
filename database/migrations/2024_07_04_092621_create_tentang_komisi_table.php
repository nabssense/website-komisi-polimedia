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
        Schema::create('about_komisi', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('name')->unique();
            $table->string('slogan');
            $table->text('description');
            $table->string('logo_cabinet');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_komisi');
    }
};
