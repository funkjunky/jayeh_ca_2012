<?php defined("SYSPATH") or die("no direct access is allowed"); ?>

<ul>
<?php foreach($years as $year => $months) { ?>
 <li><?=(in_array(true, $months))?HTML::anchor("/blog/year/$year", $year):$year?>
  <ul>
<?php		foreach($months as $month => $exists) { ?>
   <li>
	 <?=($exists)?HTML::anchor("/blog/month/$month", $month):$month?>
	</li>
<?php 	} ?>
  </ul>
 </li>
<?php } ?>
</ul>
