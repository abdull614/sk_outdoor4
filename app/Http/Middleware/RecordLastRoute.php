<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RecordLastRoute
{
    public function handle(Request $request, Closure $next)
    {
        // Ambil route name saat ini
        $currentRouteName = $request->route() ? $request->route()->getName() : null;

        // Simpan route name sebelumnya dari session, kalau ada
        $previousRoute = session('last_route_name', null);

        // Simpan route name sekarang ke session untuk request berikutnya
        session(['last_route_name' => $currentRouteName]);

        // Jika perlu juga bisa simpan URL lengkap sebelumnya
        $previousUrl = url()->previous();
        session(['last_url' => $previousUrl]);

        return $next($request);
    }
}