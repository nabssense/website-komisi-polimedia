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
        Schema::create('forum_discussions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('account_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('title')->unsigned();
            $table->string('slug')->unsigned();
            $table->string('questions_preview')->unsigned();
            $table->text('questions')->unsigned();
            $table->datetimes();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_discussions');
    }
};
