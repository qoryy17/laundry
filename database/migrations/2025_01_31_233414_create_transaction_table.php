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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_code');
            $table->unsignedBigInteger('membership_id')->nullable()->comment("If customer it's member");
            $table->unsignedBigInteger('promo_service_id')->nullable()->comment("If customer use promo service");
            $table->string('customer_name');
            $table->integer('employee_by');
            $table->enum('status', ['Waiting', 'Done']);
            $table->timestamps();

            $table->foreign('membership_id')->references('id')->on('membership')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('promo_service_id')->references('id')->on('promo_service')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('laundry_items_id')->nullable();
            $table->string('item');
            $table->double('quantity');
            $table->integer('price');
            $table->double('total');
            $table->integer('employee_by');
            $table->timestamps();

            $table->foreign('transaction_id')->references('id')->on('transaction')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('laundry_items_id')->references('id')->on('laundry_items')->onDelete('set null')->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
        Schema::dropIfExists('transaction_detail');
    }
};
