<?php

namespace App\Http\Controllers\Auth;

use App\Enums\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
  public function show(): View
  {
    return view('auth.login');
  }

  public function authenticate(Request $request): RedirectResponse
  {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required']
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();

      $user = Auth::user();

      if (!$user) {
        return redirect()->route('login.show')->with('error', 'Anda harus login dulu')->withInput();
      }

      if ($user->role == Role::Admin) {
        return redirect()->route('admin.index');
      } else {
        return redirect()->route('member.index');
      }
    }
    return redirect()->route('login.show')->with('error', 'Email atau kata sandi salah!')->withInput();
  }

  public function logout(Request $request): RedirectResponse
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('login.show')->with('success', 'Berhasil logout');
  }
}
