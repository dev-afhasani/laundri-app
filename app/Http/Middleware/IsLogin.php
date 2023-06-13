<?php

namespace App\Http\Middleware;

use App\Enums\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class IsLogin
{
  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {
    $user = Auth::user();

    switch ($request->segment(1)) {
      case 'login':
        if (!$user) {
          return $next($request);
        }

        if ($user->role == Role::Admin) {
          return redirect('admin');
        } else {
          return redirect('member');
        }

      case 'admin':
        if (!$user) {
          return redirect('login')->with('error', 'Silakan login dulu!');
        }

        if ($user->role == Role::Admin) {
          return $next($request);
        } else {
          return redirect('member');
        }

      case 'member':
        if (!$user) {
          return redirect('login')->with('error', 'Silakan login dulu!');
        }

        if ($user->role == Role::Member) {
          return $next($request);
        } else {
          return redirect('admin');
        }

      default:
        return $next($request);
    }
  }
}
