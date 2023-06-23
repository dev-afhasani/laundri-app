<?php

namespace App\Http\Controllers\Member;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function index(): View
  {
    $user = Auth::user();

    if (!$user) {
      abort(403);
    }
    $latestTransactions = Transaction::with('status')->where('member_id', $user->id)
      ->orderBy('created_at', 'DESC')
      ->orderBy('status_id', 'ASC')
      ->limit(10)
      ->get();

    return view('member.index', compact('user', 'latestTransactions'));
  }
}
