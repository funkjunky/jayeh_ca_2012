<?php defined("SYSPATH") or die("no direct access allowed"); ?>

<?=Form::open("about/externalprofile/post/".$profile->id)?>
 <?=Form::label("label", "Label")?>
 <?=Form::input("label", $profile->label)?>
 <br />
 <?=Form::label("link", "Link")?>
 <?=Form::input("link", $profile->link)?>
 <br />
 <br />
 <?=Form::submit("submit", "Add Profile Link")?>
<?=Form::close()?>
<table>
 <thead>
  <tr><th>Id</th><th>Label</th><th>Link</th></tr>
 </thead>
 <tbody>
<?php foreach($profiles as $prof) { ?>
  <tr>
   <td><?=$prof->id?></td>
   <td><?=$prof->label?></td>
	<td><?=HTML::anchor($prof->link, $prof->link)?></td>
	<td>
	 <?=Form::open("about/externalprofile/edit/".$prof->id)?>
	  <?=Form::submit("edit", "Edit")?>
	 <?=Form::close()?>
	 <?=Form::open("about/externalprofile/delete/".$prof->id)?>
	  <?=Form::submit("delete", "Delete")?>
	 <?=Form::close()?>
	</td>
  </tr>
<?php } ?>
 </tbody>
</table>
