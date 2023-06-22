<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    $user = new User([
      'email' => 'sani@email.com',
      'password' => Hash::make('11111111'),
      'name' => 'Admin Sani',
      'role' => Role::Admin->value,
    ]);
    $user->save();
  }
}
