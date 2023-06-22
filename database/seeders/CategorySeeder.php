<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Category::insert([
      ['id' => 1, 'name' => 'Satuan', 'created_at' => now(), 'updated_at' => now()],
      ['id' => 2, 'name' => 'Kiloan', 'created_at' => now(), 'updated_at' => now()]
    ]);
  }
}
