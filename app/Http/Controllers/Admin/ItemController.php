<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ItemController extends Controller
{
  /**
   * Add new item to database
   *
   * @param  \Illuminate\Http\Request $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function store(Request $request): RedirectResponse
  {
    $request->validate([
      'item_name' => ['required'],
    ]);

    $item = new Item([
      'name' => ucfirst($request->input('item_name'))
    ]);

    if (Item::where([
      'name' => $request->input('item_name')
    ])->exists()) {
      return redirect()->route('admin.price-lists.index')->with('error', 'Barang tidak dapat ditambah karena sudah tersedia!');
    }


    $item->save();

    return redirect()->route('admin.price-lists.index')
      ->with('success', 'Barang baru berhasil ditambah!');
  }
}
