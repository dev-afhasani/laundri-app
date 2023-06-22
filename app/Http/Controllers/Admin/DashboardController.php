<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function index(): View
  {
    $user = Auth::user();

    $membersCount = User::where('role', Role::Member)->count();

    return view('admin.index', compact(
      'user',
      'membersCount'
    ));
  }
}
