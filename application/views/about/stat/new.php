<?php defined("SYSPATH") or die("no direct access allowed"); ?>

<?=Form::open("about/stat/post/".$stat->stat_id)?>
 <?=Form::label("improv_id", "Improvement")?>
 <?=Form::select("improv_id", $improvements, $stat->improv_id)?>
 <br />
 <?=Form::label("value", "Value")?>
 <?=Form::input("value", $stat->value)?>
 <br />
 <?=Form::label("description", "Description")?>
 <?=Form::input("description", $stat->description)?>
 <br />
 <br />
 <?=Form::submit("submit", "Add Stat")?>
<?=Form::close()?>
<table>
 <thead>
  <tr><th>id</th><th>Improvement</th><th>Value</th><th>Description</th><th>Timestamp</th><th></th></tr>
 </thead>
 <tbody>
<?php foreach($stats as $stat) { ?>
  <tr>
   <td><?=$stat->stat_id?></td>
   <td><?=$improvements[$stat->improv_id]?></td>
   <td><?=$stat->value?></td>
	<td><?=$stat->description?></td>
	<td><?=$stat->datedone?></td>
	<td>
	 <?=Form::open("about/stat/delete/".$stat->stat_id)?>
	  <?=Form::submit("delete", "Delete")?>
	 <?=Form::close()?>
	</td>
  </tr>
<?php } ?>
 </tbody>
</table>
