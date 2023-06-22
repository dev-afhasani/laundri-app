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
    Schema::create('transaction_details', function (Blueprint $table) {
      $table->id();
      $table->foreignId('transaction_id')->constrained();
      $table->foreignId('price_list_id')->constrained();
      $table->integer('quantity');
      $table->integer('price');
      $table->integer('sub_total');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('transaction_details');
  }
};