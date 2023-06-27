<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Pengeluaran;
use Illuminate\Support\Facades\Auth;

class RincianPengeluaran extends Controller
{
  public function index(): View
  {
    $user = Auth::user();

    $pengeluaran = Pengeluaran::all();
    $total_pengeluaran = Pengeluaran::sum('harga');

    return view('admin.rincian_pengeluaran', compact(['user', 'pengeluaran', 'total_pengeluaran']));
  }
}
