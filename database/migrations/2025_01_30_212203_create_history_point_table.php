<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('history_point', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('membership_id');
            $table->text('note');
            $table->enum('type', ['Point Up', 'Point Down', 'Point Expired']);
            $table->dateTime('recorded_at');
            $table->integer('recorded_by');
            $table->timestamps();

            $table->foreign('membership_id')->references('id')->on('membership')->onDelete('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('history_point');
    }
};
