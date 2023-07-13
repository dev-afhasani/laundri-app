<?php

namespace App\Http\Controllers\Admin\Keuangan;

use App\Models\Transaction;
use App\Models\Financial;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardKeuanganController extends Controller
{
  public function index(): View
  {
    $user = Auth::user();
    $years = Transaction::selectRaw('YEAR(created_at) as Tahun')->distinct()->get();

    $seluruhPemasukan = Transaction::sum('total');
    $totalPemasukanHarian = Transaction::whereDay('finish_date', now()->day)->sum('total');
    $totalPemasukanBulanan = Transaction::whereMonth('finish_date', now()->month)->sum('total');
    $totalPemasukanTahunan = Transaction::whereYear('finish_date', now()->year)->sum('total');

    $seluruhPengeluaran = Financial::sum('pengeluaran');
    $totalPengeluaranHarian = Financial::whereDay('tanggal', now()->day)->sum('pengeluaran');
    $totalPengeluaranBulanan = Financial::whereMonth('tanggal', now()->month)->sum('pengeluaran');
    $totalPengeluaranTahunan = Financial::whereYear('tanggal', now()->year)->sum('pengeluaran');

    return view('admin.report', compact(
      'user',
      'years',
      'seluruhPemasukan',
      'seluruhPengeluaran',
      'totalPemasukanBulanan',
      'totalPemasukanTahunan',
      'totalPemasukanHarian',
      'totalPengeluaranHarian',
      'totalPengeluaranBulanan',
      'totalPengeluaranTahunan'

    ));
  }
}
