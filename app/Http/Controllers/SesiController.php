<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\SesiControllerRequest;
use Auth;
use Cache;
use App\RoleUser;
use Session;

class SesiController extends Controller
{
    private $roleUser;
    function __construct(RoleUser $role) {
        $this->roleUser = $role;
    }
    /**
     * make login view
     * @return Response::view
     */
    public function form()
    {
        return $this->view('sesi.login.form');
    }
    /**
     * make authentication in with user
     * @param  User                  $user    
     * @param  SesiControllerRequest $request 
     * @return mix
     */
    public function login(User $user, SesiControllerRequest $request)
    {
        $user = User::getLogin($request->input('username'),$request->input('password'));
        if (! is_null($user)) {
            Auth::login($user);
            $level = Auth::user()->level;
            return redirect()->route("admin.$level.landing");
        }else{
            return redirect()->back()->withInput()->withErrors("Username dan password tidak terdaftar");
        }
    }
    /**
     * logout script
     * @return [type] [description]
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('sesi.login.form');
    }
    
}
