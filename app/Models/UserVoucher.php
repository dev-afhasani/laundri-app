<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserVoucher extends Model
{
  use HasFactory;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<string>
   */
  protected $fillable = [
    'voucher_id',
    'user_id',
    'used',
  ];

  /**
   * User relation
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }

  /**
   * Voucher relation
   *
   * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
   */
  public function voucher(): BelongsTo
  {
    return $this->belongsTo(Voucher::class);
  }
}
