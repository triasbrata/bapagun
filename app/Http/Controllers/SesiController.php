<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\SesiControllerRequest;
use Auth;
use Cache;
use Session;

class SesiController extends Controller
{
    public function redirectByLevel($level)
    {
        return redirect()->route("$level.landing");
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
            return $this->redirectByLevel($level);
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
