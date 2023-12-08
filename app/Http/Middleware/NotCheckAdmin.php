<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class NotCheckAdmin
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // Check if the user is authenticated and is not an admin
        if ($user && !$user->is_admin) {
            // The user is authenticated and not an admin, allow access to the route
            return redirect('/custom-user');
        }

        // The user is either not authenticated or is an admin, redirect or handle accordingly
        return redirect('/'); // You can customize the redirect URL
    }
}
