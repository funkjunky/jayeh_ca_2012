<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Updates extends Controller_Jayeh {
	public $headertext = "Website Updates";

	public function action_index()
	{
		$updates = ORM::factory("update")->find_all();

		$view = new View("updates/multiple");
		$view->set("updates", $updates);

		$this->template->set("content", $view);
	}

	public function action_month()
	{
		$month = $this->request->param('id');
		$updates = ORM::factory("update")
							->where(DB::expr("MONTH(dateadded)"), "=", $month)
							->find_all();

		$view = new View("updates/multiple");
		$view->set("perspective", "Viewing updates from the month ".$month);
		$view->set("updates", $updates);

		$this->template->set("content", $view);
	}

	public function action_category()
	{
		$category_id = $this->request->param('id');
		$updates = ORM::factory("update")
							->where("category_id", "=", $category_id)
							->find_all();

		$view = new View("updates/multiple");
		$view->set("perspective", "Viewing updates from the category ".$category_id);
		$view->set("updates", $updates);

		$this->template->set("content", $view);
	}

	public function action_updatetype()
	{
		$updatetype_id = $this->request->param('id');
		$updates = ORM::factory("update")
							->where("updatetype_id", "=", $updatetype_id)
							->find_all();

		$view = new View("updates/multiple");
		$view->set("perspective", "Viewing updates from the updatetype ".$updatetype_id);
		$view->set("updates", $updates);

		$this->template->set("content", $view);
	}

} // End Welcome
