<?php defined("SYSPATH") or die("no direct access allowed"); ?>
<h1><?=$perspective?></h1>
<?php foreach($projects as $project) { ?>
<fieldset>
 <legend><?=$article->git_project_name?></legend>
 <img src="<?=$article->icon_path?>" />
 <a href="<?=$article->product_url?>"><?=$article->product_url?></a>
 <p>added: <?=$article->dateadded?></p>
 <p>modified: <?=$article->datemodified?></p>
 <p>Tags:
 <?php foreach($article->tags->find_all() as $tag) { ?>
  <?=HTML::anchor("project/tag/".$tag->id, $tag->name)?>
 <?php } ?>
 </p>
</fieldset>
<?php } ?>
