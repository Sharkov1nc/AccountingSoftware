<?php

namespace App\Http\Middleware;

use Closure;
use App\CompanyInformation;

class CheckExistsSetup
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
        if(count(CompanyInformation::all()) > 0){
            return redirect()->route("Home");
        }
        return $next($request);
    }
}
