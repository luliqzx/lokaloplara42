<?php 
/**
* 
*/
class LoginController extends BaseController
{
	
	public function showLogin(){
		$currentDateTime = date('Y-m-d H:i:s');
		return View::make('auth.login')->with('currentDateTime', $currentDateTime);
	}

	public function processLogin()
	{
		$username = Input::get('username');
		$password = Input::get('password');
		if ($username == 'lucky' && $password== 'oke') {
			return 'Mantap';
		}
		else
		{
			return 'Gak Mantep';
		}
	}
}
 ?>