<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Status::insert([
      ['id' => 1, 'name' => 'Belum Dikerjakan', 'created_at' => now(), 'updated_at' => now()],
      ['id' => 2, 'name' => 'Sedang Dikerjakan', 'created_at' => now(), 'updated_at' => now()],
      ['id' => 3, 'name' => 'Selesai', 'created_at' => now(), 'updated_at' => now()]
    ]);
  }
}
