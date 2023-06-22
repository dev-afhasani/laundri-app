<?php

namespace App\Http\Controllers\Admin;

use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ServiceTypeController extends Controller
{
  /**
   * Get service type data
   *
   * @param  \App\Models\ServiceType $serviceType
   * @return \Illuminate\Http\JsonResponse
   */
  public function show(ServiceType $serviceType): JsonResponse
  {
    return response()->json($serviceType);
  }

  /**
   * Update service type cost
   *
   * @param  \App\Models\ServiceType $serviceType
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function update(ServiceType $serviceType, Request $request): RedirectResponse
  {
    $request->validate([
      'cost' => ['required'],
    ]);

    $serviceType->cost = $request->input('cost');
    $serviceType->save();

    return redirect()->route('admin.price-lists.index')
      ->with('success', 'Biaya service berhasil diubah!');
  }
}
