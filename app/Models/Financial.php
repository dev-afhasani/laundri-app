<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Financial extends Model
{
  use HasFactory;

  protected $fillable = [
    'tanggal',
    'financial_category_id',
    'keterangan',
    'pemasukan',
    'pengeluaran',
  ];

  public function financial_category(): BelongsTo
  {
    return $this->belongsTo(FinancialCategory::class);
  }

  public function getFormattedPengeluaran(): string
  {
    return 'Rp ' . number_format($this->pengeluaran, 0, ',', '.');
  }
}
