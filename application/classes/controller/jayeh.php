<?php defined('SYSPATH') or die('no direct access allowed');

class Controller_Jayeh extends Controller_Subtemplate
{
	public $template = "topleveltemplate";
	public $css = array();
	public $js = array("js/libs/jquery.min.js");

	public function after()
	{
		$this->template->set("css", $this->css);
		$this->template->set("js", $this->js);
		if(isset($this->headertext))
			$this->template->set("headertext", $this->headertext);
		parent::after();
	}

	public function addCSS($css)
	{
		$this->css[] = "css/$css";
	}

	public function addJS($js)
	{
		$this->js[] = "js/$js";
	}
}
