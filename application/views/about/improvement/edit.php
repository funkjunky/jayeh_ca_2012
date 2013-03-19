<?php defined("SYSPATH") or die("no direct access allowed"); ?>

<?=Form::open("about/improvement/post/".$improvement->improv_id)?>
 <?=Form::label("subject", "Subject")?>
 <?=Form::input("subject", $improvement->subject)?>
 <br />
 <br />
 <?=Form::submit("submit", "Add Improvement")?>
<?=Form::close()?>
<table>
 <thead>
  <tr><th>Id</th><th>Subject</th><th></th></tr>
 </thead>
 <tbody>
<?php foreach($improvements as $improv) { ?>
  <tr>
   <td><?=$improv->improv_id?></td>
   <td><?=$improv->subject?></td>
	<td>
	 <?=Form::open("about/improvement/edit/".$improv->improv_id)?>
	  <?=Form::submit("edit", "Edit")?>
	 <?=Form::close()?>
	 <?=Form::open("about/improvement/delete/".$improv->improv_id)?>
	  <?=Form::submit("delete", "Delete")?>
	 <?=Form::close()?>
	</td>
  </tr>
<?php } ?>
 </tbody>
</table>
