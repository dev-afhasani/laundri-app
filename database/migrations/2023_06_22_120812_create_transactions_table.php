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
    Schema::create('transactions', function (Blueprint $table) {
      $table->id();
      $table->foreignId('status_id')->constrained();
      $table->foreignId('service_type_id')->constrained();
      $table->unsignedBigInteger('admin_id');
      $table->unsignedBigInteger('member_id');
      $table->timestamp('finish_date')->nullable();
      $table->unsignedInteger('service_cost')->default(0);
      $table->integer('discount');
      $table->integer('total');
      $table->timestamps();
      $table->integer('payment_amount')->default(0);

      $table->foreign('admin_id')->references('id')->on('users');
      $table->foreign('member_id')->references('id')->on('users');
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('transactions');
  }
};
