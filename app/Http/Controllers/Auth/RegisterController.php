<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
  /**
   * Method to show register view
   *
   * @return View
   */
  public function show(): View
  {
    return view('auth.register');
  }
}
