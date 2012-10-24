<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Changelog extends Controller_Jayeh {
	public $subtemplate = "changelog/template";
	public $headertext = "Change Logs";

	public function action_index()
	{
		$changelogs = ORM::factory("changelog")->find_all();

		$view = new View("changelog/viewall");
		$view->set("changelogs", $changelogs);

		$this->template->set("content", $view);
	}

	public function action_edit()
	{
		$changelog = new Model_Changelog();
		$changelogs = ORM::factory("changelog")->find_all();

		$view = new View("changelog/edit");
		$view->set("changelog", $changelog);
		$view->set("changelogs", $changelogs);

		$this->template->set("content", $view);
	}

	public function action_insert()
	{
		$changelog_id = $this->request->param("id");
		$changelog = new Model_Changelog($changelog_id);
		$changelog->values($_POST);
		$changelog->save();

		$this->request->redirect('changelog/edit');
	}

	public function action_delete()
	{
		$changelog_id = $this->request->param("id");
		$changelog = new Model_Changelog($changelog_id);
		$changelog->delete();

		$this->request->redirect('changelog/edit');
	}

} // End Welcome
