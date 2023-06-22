<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\ItemSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ServiceTypeSeeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    $this->call([
      UserSeeder::class,
      CategorySeeder::class,
      ItemSeeder::class,
      ServiceSeeder::class,
      ServiceTypeSeeder::class

    ]);
    // \App\Models\User::factory(10)->create();

    // \App\Models\User::factory()->create([
    //     'name' => 'Test User',
    //     'email' => 'test@example.com',
    // ]);
  }
}
