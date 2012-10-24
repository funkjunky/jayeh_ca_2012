<?php defined("SYSPATH") or die("no direct access allowed"); ?>
<?=Form::open('changelog/insert/'.$changelog->id)?>
 <?=Form::label('description', 'Description')?>
 <br />
 <?=Form::Textarea('description', $changelog->description)?>
 <br />
 <?=Form::Submit('submit', 'Submit')?>
<?=Form::close()?>
<table>
  <thead>
   <tr><th>Description</th><th>Date</th><th>Delete?</th></tr>
  </thead>
  <tbody>
<?php
	foreach($changelogs as $changelog)
		print	"<tr><td>".$changelog->description."</td>"
				. "<td>".$changelog->dateadded."</td>"
				. "<td>"
					. Form::open('changelog/delete/'.$changelog->id)
						. Form::submit('submit', 'Delete')
					. Form::close()
				. "</td></tr>";
?>
  </tbody>
 </table>
