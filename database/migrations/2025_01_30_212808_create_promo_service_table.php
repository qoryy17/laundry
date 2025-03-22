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
        Schema::create('promo_service', function (Blueprint $table) {
            $table->id();
            $table->string('promo_code')->unique();
            $table->text('promo_name');
            $table->dateTime('promo_expired');
            $table->enum('promo_type', ['Discount', 'Free']);
            $table->integer('required');
            $table->integer('discount');
            $table->enum('active', ['Y', 'N']);
            $table->integer('adding_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo_service');
    }
};
