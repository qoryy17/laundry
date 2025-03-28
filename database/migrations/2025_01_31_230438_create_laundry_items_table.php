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
        Schema::create('laundry_items', function (Blueprint $table) {
            $table->id();
            $table->string('item_code');
            $table->text('item_name');
            $table->integer('price_weight');
            $table->enum('active', ['1', '0']);
            $table->integer('adding_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laundry_items');
    }
};
