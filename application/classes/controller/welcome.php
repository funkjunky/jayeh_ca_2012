<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Jayeh {
	public $subtemplate = "welcometemplate";
	public $headertext = "Welcome Page";

	public function action_index()
	{
		$view = new View("welcome");
		$this->template->set("content", $view);
		$this->template->set("headertext", $this->headertext);
	}
} // End Welcome
