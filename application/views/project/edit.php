<?php defined("SYSPATH") or die("no direct access allowed"); ?>

<?=Form::open("admin/project/post/".$project->id)?>
 <?=Form::label("git_project_name", "Git Project Name")?>
 <?=Form::input("git_project_name", $project->git_project_name)?>
 <br />
 <?=Form::label("icon_path", "Icon Path")?>
 <?=Form::preupload("icon_path", $project->icon_path)?>
 <br />
 <?=Form::label("product_url", "Product URL")?>
 <?=Form::input("product_url", $project->product_url)?>
 <br />
 <?=Form::label("tags", "Tags")?>
 <?=Form::input("tags", $projecttags, array(
 	"class"=>"tags",
	"data-autocomplete"=>implode(",", $tags)))?>
 <br />
 <fieldset>
  <legend>Screenshots</legend>
  <?=Form::preupload("screenshot_path")?>
  <br />
  <?=Form::button("screenshot_add", "Add Image", array("disabled"))?>
  <br />
<?	foreach($project->screenshots->find_all() as $screenshot) { ?>
  <?=Form::preupload("screenshot_path")?>
  <br />
<?	} ?>
 </fieldset>
 <br />
 <br />
 <?=Form::submit("submit", "Add Article")?>
<?=Form::close()?>
<table>
 <thead>
  <tr><th>Id</th><th>Git Project Name</th><th>Icon</th><th>Tags</th></tr>
 </thead>
 <tbody>
<?php foreach($projects as $project) { ?>
  <tr>
   <td><?=$project->id?></td>
   <td><?=$project->git_project_name?></td>
   <td><?=$project->icon_path?></td>
   <td><?=implode(",", $project->tags->find_all()->as_array("id", "name"))?></td>
	<td>
	 <?=Form::open("admin/project/edit/".$project->id)?>
	  <?=Form::submit("edit", "Edit")?>
	 <?=Form::close()?>
	 <?=Form::open("admin/project/delete/".$project->id)?>
	  <?=Form::submit("delete", "Delete")?>
	 <?=Form::close()?>
	</td>
  </tr>
<?php } ?>
 </tbody>
</table>
