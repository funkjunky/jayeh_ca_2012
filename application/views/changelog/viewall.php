<?php defined('SYSPATH') or die("no direct access allowed!"); ?>
 <table>
  <thead>
   <tr><th>Description</th><th>Date</th></tr>
  </thead>
  <tbody>
<?php
	foreach($changelogs as $changelog)
		print	"<tr><td>".$changelog->description."</td>"
				. "<td>".$changelog->dateadded."</td></tr>";
?>
  </tbody>
 </table>
