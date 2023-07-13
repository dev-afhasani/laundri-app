<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Role;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function index(): View
  {
    $user = Auth::user();

    $membersCount = User::where('role', Role::Member)->count();
    $transactionsCount = Transaction::count();

    $recentTransactions = Transaction::whereNull('finish_date')
      ->with('status')
      ->where('service_type_id', 1)
      ->orderByDesc('created_at')
      ->limit(10)
      ->get();

    $priorityTransactions = Transaction::whereNull('finish_date')
      ->with('status')
      ->where('service_type_id', 2)
      ->orderByDesc('created_at')
      ->limit(10)
      ->get();

    return view('admin.index', compact(
      'user',
      'recentTransactions',
      'membersCount',
      'transactionsCount',
      'priorityTransactions',
    ));
  }
}
