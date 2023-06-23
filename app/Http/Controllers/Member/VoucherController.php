<?php

namespace App\Http\Controllers\Member;

use App\Models\Voucher;
use App\Models\UserVoucher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class VoucherController extends Controller
{
  public function store(Voucher $voucher): RedirectResponse
  {
    $user = Auth::user();

    if (!$user) {
      abort(403);
    }

    // Check if member's points are sufficient to redeem
    // If points are sufficient, then save to database
    if ($user->point >= $voucher->point_need) {
      $user_voucher = new UserVoucher([
        'voucher_id' => $voucher->id,
        'user_id'    => $user->id,
        'used'       => 0,
      ]);
      $user_voucher->save();

      // Subtract member's point
      $user->point = $user->point - $voucher->point_need;
      $user->save();

      // Redirect to point view
      return redirect()->route('member.points.index')->with('success', 'Poin berhasil ditukar menjadi voucher!');
    } else {
      return redirect()->route('member.points.index')->with('error', 'Poin tidak mencukupi untuk menukar voucher!');
    }
  }
}
