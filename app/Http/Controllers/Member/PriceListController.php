<?php

namespace App\Http\Controllers\Member;

use App\Models\PriceList;
use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PriceListController extends Controller
{
  public function index(): View
  {
    $user = Auth::user();
    $satuan = PriceList::where('category_id', 1)->get();
    $kiloan = PriceList::where('category_id', 2)->get();
    $serviceTypes = ServiceType::all();

    return view('member.price_lists', compact(
      'user',
      'satuan',
      'kiloan',
      'serviceTypes',
    ));
  }
}
