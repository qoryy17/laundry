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
        Schema::create('payment', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->unsignedBigInteger('transaction_id');
            $table->integer('amount');
            $table->integer('paid');
            $table->integer('return');
            $table->integer('point_reward')->comment('point reward after transaction');
            $table->enum('payment_type', ['cash', 'point'])->comment('cash or point');
            $table->integer('employee_by');
            $table->timestamps();

            $table->foreign('transaction_id')->references('id')->on('transaction')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};
