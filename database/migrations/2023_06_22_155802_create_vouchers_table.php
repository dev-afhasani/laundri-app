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
    Schema::create('vouchers', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->integer('discount_value');
      $table->integer('point_need');
      $table->boolean('active_status')->default(1);
      $table->text('description');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('vouchers');
  }
};
