<?php

namespace App;
use Auth;
class RoleUser 
{
	protected $user;
	function __construct($function=null) {
		$this->user = Auth::user();
	}
    public function redirectLanding()
    { 
    	return $this->redirect('landing'); 
    }
    public function redirect($route)
    {
    	return redirect()->route("{$this->user->level}.$route");
    }

}
