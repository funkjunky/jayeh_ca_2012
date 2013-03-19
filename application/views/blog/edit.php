<?php defined("SYSPATH") or die("no direct access allowed"); ?>

<?=Form::open("admin/blog/post/".$blog->id)?>
 <?=Form::label("title", "Title")?>
 <?=Form::input("title", $blog->title)?>
 <br />
 <?=Form::label("body", "Body")?>
 <div class="wmd-panel">
  <div id="wmd-button-bar"></div>
   <?=Form::textarea("body", $blog->body, array(
 		"class"=>"wmd-input",
		"id"=>"wmd-input"
 	))?>
  </div>
 </div>
 <div id="wmd-preview" class="wmd-panel wmd-preview"></div>
 <br />
 <?=Form::label("tags", "Tags")?>
 <?=Form::input("tags", $articletags, array(
 	"class"=>"tags",
	"data-autocomplete"=>implode(",", $tags)))?>
 <br />
 <br />
 <?=Form::submit("submit", "Add Article")?>
<?=Form::close()?>
<table>
 <thead>
  <tr><th>Id</th><th>Title</th><th>Body</th><th>Tags</th></tr>
 </thead>
 <tbody>
<?php foreach($blogs as $post) { ?>
  <tr>
   <td><?=$post->id?></td>
   <td><?=$post->title?></td>
   <td><?=Text::limit_chars($post->body, 100, " [...]", true)?></td>
   <td><?=implode(",", $post->tags->find_all()->as_array("id", "name"))?></td>
	<td>
	 <?=Form::open("admin/blog/edit/".$post->id)?>
	  <?=Form::submit("edit", "Edit")?>
	 <?=Form::close()?>
	 <?=Form::open("admin/blog/delete/".$post->id)?>
	  <?=Form::submit("delete", "Delete")?>
	 <?=Form::close()?>
	</td>
  </tr>
<?php } ?>
 </tbody>
</table>
