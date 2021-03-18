<?php

namespace App\Http\Middleware;

use Closure;
use App;

class SetLocaleForBackend
{
    /**
     *
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
	 
    public function handle($request, Closure $next)
    {
        if (!session()->has('locale')) {
            session()->put('locale', config('app.locale'));
        }
        app()->setLocale(session()->get('locale'));

        return $next($request);
    }
}
