<?php

namespace App\Http\Middleware;
use Closure;
use Auth;
use RoleUserChecker;
use Request;

class UserAccessControll
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param String $as [as of user ['pegawai', 'student']]
     * @param String $role [what pegawai role]
     * @return mixed
     */
    public function handle($request, Closure $next, $as, $role=null)
    {
        if(\Route::currentRouteName() == "sesi.logout"){
            return $next($request);
        }
        if ($as == 'guest' && Auth::guest()) {
            return $next($request);
        } else {
            if ( Auth::check() ) {
                if (Auth::user()->as == $as && $role == null) {
                    return $next($request);
                } else {
                    $pegawaiRole = Auth::user()->pegawai->tugas()->lists('role');
                    if (RoleUserChecker::checkRole($pegawaiRole,$role)) {
                        return $next($request);
                    }
                }
                if(Auth::user()->pegawai->tugas()->count() > 1){
                    return redirect()->route("pegawai.do");
                }
                $to = strtolower(str_replace(' ','',Auth::user()->pegawai->tugas->first()->role)).".landing";
                return redirect()->route($to);
            }
        }
        return  redirect()->route('sesi.login.form');
    }
}
