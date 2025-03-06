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
        Schema::create('membership', function (Blueprint $table) {
            $table->id();
            $table->string('membership_code')->unique();
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->integer('point');
            $table->enum('block', ['0', '1'])->default('0');
            $table->integer('register_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership');
    }
};
