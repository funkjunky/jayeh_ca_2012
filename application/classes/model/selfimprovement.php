<?php defined("SYSPATH") or die("no direct access allowed");

class Model_Selfimprovement extends ORM
{
	protected $_primary_key = "improv_id";
	
	public $_has_many = array(
		"selfimprovementstats" => array(
			"model" => "selfimprovementstat",
			"foreign_key" => "improv_id"
		)
	);
}
