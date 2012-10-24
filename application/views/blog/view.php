<?php defined("SYSPATH") or die("no direct access allowed"); ?>
<h1><?=$perspective?></h1>
<?php foreach($articles as $article) { ?>
<fieldset>
 <legend><?=$article->title?></legend>
 <p>added: <?=$article->dateadded?></p>
 <p>modified: <?=$article->datemodified?></p>
 <p>Tags:
 <?php foreach($article->tags->find_all() as $tag) { ?>
  <?=HTML::anchor("blog/tag/".$tag->id, $tag->name)?>
 <?php } ?>
 </p>
 <p>
  <?=$article->body?>
 </p>
 <?php foreach($article->comments->find_all() as $comment) { ?>
  <?=View::factory("comment/single")->set("comment", $comment)?>
 <?php } ?>
 <?=View::factory("comment/new", array(
 		"comment" => ORM::factory("comment"),
		"article_id" => $article->pk()
	))?>
</fieldset>
<?php } ?>
