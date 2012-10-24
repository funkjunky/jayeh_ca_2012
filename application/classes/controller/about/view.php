<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About_View extends Controller_Jayeh {
	public $headertext = "Profile";

	public function action_index()
	{
		$view = new View("about/index");

		$data = ORM::factory("aboutdata")->find_all();
		$profiles = ORM::factory("externalprofile")->find_all();
		$improvements = ORM::factory("selfimprovement")->find_all();
		$stats = ORM::factory("selfimprovementstat")->find_all();

		$view->set("data", $data);
		$view->set("profiles", $profiles);
		$view->set("improvements", $improvements);
		$view->set("stats", $stats);

		$this->template->set("content", $view);
	}
} // End About
