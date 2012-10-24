<?php defined('SYSPATH') or die('No direct script access allowed');

class Controller_Subtemplate extends Controller_App
{
	public $subtemplate;
	protected $_subview;

	public function before()
	{
		parent::before();
		if(isset($this->subtemplate))
			$this->_subview = new View($this->subtemplate);
	}

	public function after()
	{
		if(isset($this->subtemplate))
		{
			$this->_subview->set("content", $this->template->content);
			$this->template->set
				('content', $this->_subview);
		}
		parent::after();
	}
}
