<?php defined("SYSPATH") or die("No direct access allowed"); ?>
<h3>Add your comment</h3>
<?=Form::open("/admin/blog/postcomment")?>
 <?=Form::label("author", "Author")?>
 <?=Form::input("author", $comment->author)?>
 <br />
 <?=Form::textarea("body", $comment->body)?>
 <br />
 <?=Form::hidden("article_id", $article_id)?>
 <?=Form::submit("submit", "Post Comment")?>
<?=Form::close()?>
