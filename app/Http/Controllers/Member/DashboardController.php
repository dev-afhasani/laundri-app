<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
  public function index(): View
  {
    $user = Auth::user();

    if (!$user) {
      abort(403);
    }

    return view('member.index');
  }
}
