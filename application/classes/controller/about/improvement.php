<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About_Improvement extends Controller_Jayeh {
	public $headertext = "Personal Improvements";

	public function action_new()
	{
		$improvement = new Model_Selfimprovement();
		$improvements = ORM::factory("selfimprovement")->find_all();

		$view = new View("about/improvement/edit");
		$view->set("improvement", $improvement);
		$view->set("improvements", $improvements);

		$this->template->set("content", $view);
	}

	public function action_edit()
	{
		$improv_id = $this->request->param("id");
		//$improvement = new Model_Selfimprovement($improv_id);
		$improvement = ORM::factory("selfimprovement", $improv_id);
		$improvements = ORM::factory("selfimprovement")->find_all();

		$view = new View("about/improvement/edit");
		$view->set("improvement", $improvement);
		$view->set("improvements", $improvements);

		$this->template->set("content", $view);
	}

	public function action_post()
	{
		$improv_id = $this->request->param("id");
		$improvement = new Model_Selfimprovement($improv_id);

		$improvement->values($_POST);
		$improvement->save();

		$this->request->redirect("about/improvement/edit");
	}

	public function action_delete()
	{
		$improv_id = $this->request->param("id");
		$improvement = new Model_Selfimprovement($improv_id);
		$improvement->delete();

		$this->request->redirect("about/improvement/edit");
	}

}

?>
