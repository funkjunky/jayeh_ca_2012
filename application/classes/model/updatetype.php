<?php defined("SYSPATH") or die("no direct access allowed");

class Model_Updatetype extends ORM {

	public $_has_many = array(
		"updates" => array(
			"model" => "update",
			"foreign_key" => "updatetype_id"
		)
	);
}

?>
