<?php  
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	/**
	* Admin landding page
	*/
	class AdminController extends Controller
	{
		public function landing()
		{
			return $this->view('admin.landing');
		}
	}