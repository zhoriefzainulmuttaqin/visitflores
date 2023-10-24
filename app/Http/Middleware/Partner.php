<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Partner
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard('partner')->check() && Auth::guard('partner')->user()->active == 1) {
            return redirect()->to('/app-partner')->with("msg_status", "danger")->with('msg', '<strong>Maaf.</strong> <br> Silahkan login terlebih dahulu!');
        }
        return $next($request);
    }
}
