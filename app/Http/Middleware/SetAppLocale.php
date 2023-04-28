<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie as FacadesCookie;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Cookie;

class SetAppLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(Session::get('locale') !=null){
          App::setLocale(Session::get('locael'));
        }else{
            Session::put('locale','en');
            App::setLocale(Session::get('locale'));
        }

        // $locale=$request->get('locale');
        // App::setLocale($locale);
        // URL::defaults([
        //     'locale'=>$locale
        // ]);
        // Route::current()->forgetParameter('locale');
        return $next($request);
    }
}
