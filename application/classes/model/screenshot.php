<?php defined("SYSPATH") or die("no direct access allowed");

class Model_Screenshot extends ORM
{
	protected $_belongs_to = array(
		"project" => array(
			"model"			=>	"project",
			"foreign_key"	=>	"project_id"
		)
	);
}
