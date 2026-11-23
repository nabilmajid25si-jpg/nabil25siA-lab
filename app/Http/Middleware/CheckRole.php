<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Hanya pengguna dengan role tertentu yang boleh lanjut.
     * Contoh pemakaian: ->middleware('checkrole:Super Admin,Mitra')
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        $user = $request->user();

        if (!$user) {
            abort(401);
        }

        if (!in_array($user->role, $roles, true)) {
            abort(403, 'Anda tidak memiliki izin.');
        }

        return $next($request);
    }
}
