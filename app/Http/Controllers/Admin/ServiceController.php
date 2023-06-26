<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ServiceController extends Controller
{
  /**
   * Add new service to database
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(Request $request): RedirectResponse
  {
    $request->validate([
      'service_name' => ['required'],
    ]);

    if (Service::where([
      'name' => $request->input('service_name')
    ])->exists()) {
      return redirect()->route('admin.price-lists.index')
        ->with('error', 'Servis tidak dapat ditambah karena sudah tersedia!');
    }

    $service = new Service([
      'name' => ucfirst($request->input('service_name'))
    ]);
    $service->save();

    return redirect()->route('admin.price-lists.index')
      ->with('success', 'Servis baru berhasil ditambah!');
  }
}
