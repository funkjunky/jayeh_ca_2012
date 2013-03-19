<?php defined("SYSPATH") or die("No direct access allowed."); ?>
<?=$update->category->name?>
- <?=ORM::factory('update')->get_foreign_title($update)?>
- <?=$update->updatetype->name?>
- <?=$update->dateadded?>
