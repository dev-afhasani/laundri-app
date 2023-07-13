<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
  // menampilkan daftar pelanggan
  public function index(): View
  {
    $user = Auth::user();
    $members = User::where('role', 2)->get();

    return view('admin.members', compact(
      'user',
      'members'
    ));
  }
}
