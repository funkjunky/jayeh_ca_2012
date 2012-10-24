<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Userutility extends Controller {
	public function action_createadmin()
	{
		$model = ORM::factory('user');
		$model->values(array(
			'username' => 'root',
			'email' => 'jason.abz+testblog@gmail.com',
			'password' => 'root',
			'password_confirm' => 'root'
		));
		$model->save();
		//login and admin roles.
		//I'm guessing ->find() returns the PK.
		$model->add('roles',
			ORM::factory('role')->where('name', '=', 'login')->find());
		$model->add('roles',
			ORM::factory('role')->where('name', '=', 'admin')->find());
	}
}
