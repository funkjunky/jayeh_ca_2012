<?php defined("SYSPATH") or die("no direct access allowed");

class Model_Selfimprovementstat extends ORM
{
	protected $_primary_key = "stat_id";
	protected $_belongs_to = array(
		"selfimprovement" => array(
				"model"			=> "selfimprovement",
				"foreign_key"	=> "improv_id"
		)
	);
}
