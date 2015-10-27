<?php

namespace App;
use Auth;
class RoleUser 
{
	protected $user;
	function __construct() {
		$this->user = Auth::user();
	}
    public function redirectLanding()
    { 
    	return $this->redirect('landing'); 
    }
    public function redirect($route)
    {
    	return redirect()->route("admin.{$this->user->level}.$route");
    }

}
