<?php defined("SYSPATH") or die("no direct access allowed");

class Model_Project extends ORM
{
	protected $_has_many = array(
		"screenshots" => array(
			"model"			=> "screenshot",
			"foreign_key"	=> "project_id"
		),
		"tags" => array(
			"model"			=>	"tag",
			"through"		=>	"project_tag"
		)
	);
}
