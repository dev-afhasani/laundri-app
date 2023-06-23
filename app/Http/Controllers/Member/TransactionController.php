<?php

namespace App\Http\Controllers\Member;

use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
  public function index(): View
  {
    $user = Auth::user();

    if (!$user) {
      abort(403);
    }

    $transactions = Transaction::with('status')->where('member_id', $user->id)
      ->orderBy('created_at', 'DESC')
      ->orderBy('status_id', 'ASC')
      ->get();

    return view('member.transactions_history', compact('user', 'transactions'));
  }

  public function show(string | int $id): View
  {
    $user = Auth::user();
    $transactions = TransactionDetail::where('transaction_id', $id)->get();

    return view('member.detail', compact('user', 'transactions', 'id'));
  }
}
