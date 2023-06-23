<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\Role;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
  use HasApiTokens, HasFactory, Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array<int, string>
   */
  protected $fillable = [
    'name',
    'email',
    'password',
    'gender',
    'address',
    'phone_number',
    'profile_picture'
  ];

  /**
   * The attributes that should be hidden for serialization.
   *
   * @var array<int, string>
   */
  protected $hidden = [
    'password',
    'remember_token',
  ];

  /**
   * The attributes that should be cast.
   *
   * @var array<string, string>
   */
  protected $casts = [
    'email_verified_at' => 'datetime',
    'role' => Role::class
  ];

  /**
   * Transaction relation
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function transactions(): HasMany
  {
    return $this->hasMany(Transaction::class, 'member_id');
  }

  /**
   * Vouchers relation
   *
   * @return \Illuminate\Database\Eloquent\Relations\HasMany
   */
  public function vouchers(): HasMany
  {
    return $this->hasMany(UserVoucher::class);
  }


  /**
   * Return column name for storing file name
   *
   * @return string
   */
  public function fileColumn(): string
  {
    return 'profile_picture';
  }

  /**
   * File path for storing and getting uploaded file
   *
   * @return string
   */
  public function getFilePath(): string
  {
    return 'images';
  }

  /**
   * Get storage name
   *
   * @return string
   */
  public function getStorageName(): string
  {
    return 'public';
  }


  /**
   * Mutator for getting file asset path
   *
   * @return string|null
   */
  // public function getFileAsset(): ?string
  // {
  //   if (!$this->hasFile() || $this->isDefaultFileName()) {
  //     return asset('img/profile/' . $this->getDefaultFileName());
  //   }

  //   return $this->getFileStorage()->url($this->getFullFilePath());
  // }

  /**
   * Password mutator
   *
   * @return \Illuminate\Database\Eloquent\Casts\Attribute
   */
  public function password(): Attribute
  {
    return Attribute::make(
      set: function ($value) {
        if (blank($value)) return null;

        return Hash::needsRehash($value) ? Hash::make($value) : $value;
      }
    );
  }
}
