<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About_Internaldata extends Controller_Jayeh {
	public $headertext = "Internal Data";

	public function action_new()
	{
		$aboutdatum = new Model_Aboutdata();
		$aboutdata = ORM::factory("aboutdata")->find_all();

		$view = new View("about/data/edit");
		$view->set("aboutdatum", $aboutdatum);
		$view->set("aboutdata", $aboutdata);

		$this->template->set("content", $view);
	}

	public function action_edit()
	{
		$aboutdatum_id = $this->request->param("id");
		$aboutdatum = new Model_Aboutdata($aboutdatum_id);
		$aboutdata = ORM::factory("aboutdata")->find_all();

		$view = new View("about/data/edit");
		$view->set("aboutdatum", $aboutdatum);
		$view->set("aboutdata", $aboutdata);

		$this->template->set("content", $view);
	}

	public function action_post()
	{
		$about_id = $this->request->param("id");
		$about = new Model_Aboutdata($about_id);
		$about->values($_POST);
		$about->save();

		$this->request->redirect("about/internaldata/new");
	}

	public function action_delete()
	{
		$about_id = $this->request->param("id");
		$about = new Model_Aboutdata($about_id);
		$about->delete();

		$this->request->redirect("about/internaldata/new");
	}
}

?>
