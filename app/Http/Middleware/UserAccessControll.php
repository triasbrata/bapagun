<?php

namespace App\Http\Middleware;
use Closure;
use Route;
use App\RoleUser;
use Auth;

class UserAccessControll
{
    private $roleUser;
    function __construct(RoleUser $roleUser) {
        $this->roleUser = $roleUser;
    }
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
        if(Route::currentRouteName() == "sesi.logout"){
            return $next($request);
        }elseif ($as == 'guest' && Auth::guest()) {
            return $next($request);
        } else {
            if ( Auth::check() ) {
                if(Route::currentRouteName() == "sesi.login.form") return $this->roleUser->redirectLanding();
                return $next($request);
            }
        }
        return  redirect()->route('sesi.login.form');
    }
}
