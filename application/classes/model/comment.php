<?php defined("SYSPATH") or die("no direct access allowed");

class Model_Comment extends ORM
{
	protected $_belongs_to = array(
		"article" => array(
				"model"			=> "article",
				"foreign_key"	=> "article_id"
		)
	);
}
