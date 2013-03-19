<?php defined("SYSPATH") or die("no direct access allowed"); ?>
<div>
<?php foreach($tags as $tag) { ?>
 <?=HTML::anchor("/blog/tag/".$tag->id, $tag->name)?> 
<?php } ?>
</div>
