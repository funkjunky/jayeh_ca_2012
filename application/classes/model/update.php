<?php defined("SYSPATH") or die("no direct access allowed");

class Model_Update extends ORM
{
	protected $_belongs_to = array(
		"category" => array(
				"model"			=> "category",
				"foreign_key"	=> "category_id"
		),
		"updatetype" => array(
				"model"			=> "updatetype",
				"foreign_key"	=> "updatetype_id"
		)
	);

	public function get_foreign_object($update)
	{
		$foreign_object = ORM::factory(
			$update->category->name,
			$update->foreign_id
		);

		return $foreign_object;
	}

	public function get_foreign_title($update)
	{
		return $this->get_foreign_object($update)
							->{$update->category->titlecolumn};
	}
}
