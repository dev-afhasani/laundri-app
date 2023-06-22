<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    Service::insert([
      ['name' => 'Cuci kering', 'created_at' => now(), 'updated_at' => now()],
      ['name' => 'Cuci setrika', 'created_at' => now(), 'updated_at' => now()]
    ]);
  }
}
