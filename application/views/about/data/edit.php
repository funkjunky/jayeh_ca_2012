<?php defined("SYSPATH") or die("no direct access allowed"); ?>

<?=Form::open("about/internaldata/post/".$aboutdatum->id)?>
 <?=Form::label("subject", "Subject")?>
 <?=Form::input("subject", $aboutdatum->subject)?>
 <br />
 <?=Form::label("description", "Description")?>
 <?=Form::input("description", $aboutdatum->description)?>
 <br />
 <br />
 <?=Form::submit("submit", "Add Profile datum")?>
<?=Form::close()?>
<table>
 <thead>
  <tr><th>Id</th><th>Subject</th><th>Description</th><th></th></tr>
 </thead>
 <tbody>
<?php foreach($aboutdata as $data) { ?>
  <tr>
   <td><?=$data->id?></td>
   <td><?=$data->subject?></td>
	<td><?=$data->description?></td>
	<td>
	 <?=Form::open("about/internaldata/edit/".$data->id)?>
	  <?=Form::submit("edit", "Edit")?>
	 <?=Form::close()?>
	 <?=Form::open("about/internaldata/delete/".$data->id)?>
	  <?=Form::submit("delete", "Delete")?>
	 <?=Form::close()?>
	</td>
  </tr>
<?php } ?>
 </tbody>
</table>
