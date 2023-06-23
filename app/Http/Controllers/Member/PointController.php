<?php

namespace App\Http\Controllers\Member;

use App\Models\Voucher;
use App\Models\UserVoucher;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PointController extends Controller
{
  public function index(): View
  {
    $user = Auth::user();

    if (!$user) {
      abort(403);
    }
    $vouchers = Voucher::where('active_status', 1)->get();
    $memberVouchers = UserVoucher::with('voucher')->where([
      'user_id' => $user->id,
      'used' => 0,
    ])->get();

    return view('member.point', compact('user', 'vouchers', 'memberVouchers'));
  }
}
