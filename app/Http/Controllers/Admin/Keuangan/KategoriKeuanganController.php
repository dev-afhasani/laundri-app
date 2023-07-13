<?php

namespace App\Http\Controllers\Admin\Keuangan;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\FinancialCategory;
use Illuminate\Support\Facades\Auth;

class KategoriKeuanganController extends Controller
{
  public function index(): View
  {
    $user = Auth::user();

    $category = FinancialCategory::all();

    return view('admin.kategori_keuangan', compact('user', 'category'));
  }
}
