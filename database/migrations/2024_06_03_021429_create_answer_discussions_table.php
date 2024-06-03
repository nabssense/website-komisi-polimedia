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
        Schema::create('answer_discussions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('account_id')->unsigned();
            $table->bigInteger('discussion_id')->unsigned();
            $table->bigInteger('answer')->unsigned();
            $table->datetimes();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_discussions');
    }
};
