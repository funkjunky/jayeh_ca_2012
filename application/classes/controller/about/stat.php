<?php defined("SYSPATH") or die("No direct access is allowed");

class Controller_About_Stat extends Controller_Jayeh {
	public $headertext = "Personal Improvement Stats";

	public function action_new()
	{
		$stat = new Model_Selfimprovementstat();
		$stats = ORM::factory("selfimprovementstat")->find_all();
		$improvements = ORM::factory("selfimprovement")->find_all()
								->as_array("improv_id", "subject");

		$view = new View("about/stat/new");
		$view->set("stat", $stat);
		$view->set("stats", $stats);
		$view->set("improvements", $improvements);

		$this->template->set("content", $view);
	}

	public function action_post()
	{
		$stat_id = $this->request->param("id");
		$stat = new Model_Selfimprovementstat($stat_id);
		
		$stat->values($_POST);
		$stat->save();

		$this->request->redirect("about/stat/new");
	}

	public function action_delete()
	{
		$stat_id = $this->request->param("id");
		$stat = new Model_Selfimprovementstat($stat_id);

		$stat->delete();

		$this->request->redirect("about/stat/new");
	}
}
