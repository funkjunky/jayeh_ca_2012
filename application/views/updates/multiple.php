<?php defined("SYSPATH") or die("No direct access allowed"); ?>
<fieldset>
 <legend>Updates!!</legend>
<?php foreach($updates as $update) { ?>
 <div><?=View::factory("updates/single")->set("update", $update)?></div>
<?php } ?>
</fieldset>
