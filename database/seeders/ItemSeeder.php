<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItemSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Item::insert([
      ['name' => 'Pakaian', 'created_at' => now(), 'updated_at' => now()],
      ['name' => 'Seprai', 'created_at' => now(), 'updated_at' => now()]
    ]);
  }
}
