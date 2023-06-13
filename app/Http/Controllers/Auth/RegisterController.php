<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterMemberRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

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

  /**
   * Method to register a new user
   *
   * @param  \App\Http\Requests\Auth\RegisterMemberRequest $request
   * @return \Illuminate\Http\RedirectResponse
   */
  public function register(RegisterMemberRequest $request): RedirectResponse
  {
    User::create($request->safe()->all());

    return redirect()->route('register.show')->with('success', 'Berhasil register');
  }
}
