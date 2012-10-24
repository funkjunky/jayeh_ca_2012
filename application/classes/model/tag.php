<?php defined("SYSPATH") or die("no direct access allowed");

class Model_Tag extends ORM {

	public $_has_many = array(
		"articles" => array(
			"model" => "article",
			"through" => "article_tag"
		)
	);

}

?>
