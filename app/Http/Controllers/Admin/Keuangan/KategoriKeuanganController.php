<?php

namespace App\Http\Controllers\Admin\Keuangan;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\FinancialCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class KategoriKeuanganController extends Controller
{
  public function index(): View
  {
    $user = Auth::user();

    $category = FinancialCategory::all();

    return view('admin.kategori_keuangan', compact('user', 'category'));
  }

  public function store(Request $request): RedirectResponse
  {
    $request->validate([
      'cat_name' => ['required']
    ]);

    $categoryName = new FinancialCategory([
      'name' => ucfirst($request->input('cat_name'))
    ]);

    $categoryName->save();

    return redirect()->route('admin.financials.category')->with('success', 'Berhasil menambah kategori');
  }
}
