<?php

namespace Akademik\Http\Controllers\sesi;
use Illuminate\Http\Request;
use Akademik\Http\Controllers\Controller;
use Akademik\User;
use Akademik\Http\Requests\SesiControllerRequest;
use Auth;
use Cache;
use Session;

class SesiController extends Controller
{
    public function __construct()
    {
    }

    private function redirectTo($level)
    {
        if ($level == 'pegawai') {
            return redirect()->route('pegawai.do');
        } elseif ($level == 'siswa') {
            return redirect()->route('siswa.landing');
        } else {
            abort(404,"Undefined User Level Access");
        }
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
            $level = Auth::user()->as;
            return $this->redirectTo($level);
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
    public function pegawaiRole()
    {
        
        if(is_null(Auth::user()->pegawai)){
            return $this->logout()->withErrors('Username tidak terdaftar sebagai pegawai');    
        }
        if( Auth::user()->pegawai->tugas()->count() < 1){
            // force user to logout
           return $this->logout()->withErrors('Pegawai tidak memiliki akses terhadap sistem');
        }
        // if(Auth::user()->pegawai->tugas()->count() == 1){
        //     return redirect()->route(strtolower(str_replace(' ','',Auth::user()->pegawai->tugas->first()->role)).".landing");
        // }
        $employerDo = Auth::user()->pegawai->tugas;
        return $this->view('sesi.do',compact('employerDo'));        
    }
    public function pegawaiRoleSelect(Request $r)
    {
        $role  = $r->input('role');
        Session::put('EmployerRole',$role);
        return redirect()->route("$role.landing");
    }
}
