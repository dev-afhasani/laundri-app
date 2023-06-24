<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceTypeSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    ServiceType::insert([
      ['id' => 1, 'name' => 'Regular Service', 'description' => 'Layanan reguler dengan lama waktu pengerjaan yang tidak tentu', 'cost' => 0, 'created_at' => now(), 'updated_at' => now()],
      // ['id' => 2, 'name' => 'Priority Service', 'description' => 'Layanan prioritas dengan waktu pengerjaan satu hari', 'cost' => 10000, 'created_at' => now(), 'updated_at' => now()]
    ]);
  }
}
