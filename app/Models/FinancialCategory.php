<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FinancialCategory extends Model
{
  use HasFactory;

  protected $fillable = [
    'nama'
  ];

  public function financial(): HasMany
  {
    return $this->hasMany(Financial::class);
  }
}