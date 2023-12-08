<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SellerMiddelware
{
    





    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user && $user->is_seller) {
            
            return redirect('/seller');
        }

        
        return redirect('/'); 
    }
}


