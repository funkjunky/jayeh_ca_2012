<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Updates extends Controller_Jayeh {

	public function action_index()
	{
		$this->request->redirect('doesnotexist');
	}

	public function action_insert()
	{
		$update_id = $this->request->param("id");
		$update = new Model_Update($update_id);
		$update->values($_POST);
		$update->save();
	}

	public function action_delete()
	{
		$update_id = $this->request->param("id");
		$update = new Model_Update($update_id);
		$update->delete();
	}
} // End Welcome
