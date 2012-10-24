<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About_Externalprofile extends Controller_Jayeh {

	public function action_new()
	{
		$profile = new Model_Externalprofile();
		$profiles = ORM::factory("externalprofile")->find_all();

		$view = new View("about/externalprofile/edit");
		$view->set("profile", $profile);
		$view->set("profiles", $profiles);

		$this->template->set("content", $view);
	}

	public function action_edit()
	{
		$profile_id = $this->request->param("id");
		$profile = new Model_Externalprofile($profile_id);
		$profiles = ORM::factory("externalprofile")->find_all();

		$view = new View("about/externalprofile/edit");
		$view->set("profile", $profile);
		$view->set("profiles", $profiles);

		$this->template->set("content", $view);
	}

	public function action_post()
	{
		$profile_id = $this->request->param("id");
		$profile = new Model_Externalprofile($profile_id);
		$profile->values($_POST);
		$profile->save();

		$this->request->redirect("about/externalprofile/new");
	}

	public function action_delete()
	{
		$profile_id = $this->request->param("id");
		$profile = new Model_Externalprofile($profile_id);
		$profile->delete();

		$this->request->redirect("about/externalprofile/new");
	}
}

?>
