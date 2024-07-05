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
        Schema::create('scholarship_fundings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('scholarship_type');
            $table->string('statement_letter');
            $table->string('mbkm_program');
            $table->string('student_activity');
            $table->string('activity_certificate')->nullable();
            $table->string('competition_status');
            $table->string('competition_name')->nullable();
            $table->string('competition_level')->nullable();
            $table->string('competition_rank')->nullable();
            $table->string('competition_certificate')->nullable();
            $table->bigInteger('period_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_fundings');
    }
};
