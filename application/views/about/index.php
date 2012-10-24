<?php defined("SYSPATH") or die("No direct access allowed!"); ?>

<fieldset id="internaldata">
 <legend>Personal Tidbits</legend>
 <table>
<?php foreach($data as $datum) { ?>
  <tr>
   <td><?=$datum->subject?></td>
	<td> - </td>
	<td><?=$datum->description?></td>
  </tr>
<?php } ?>
 </table>
</fieldset>
<fieldset id="externalprofiles">
 <legend>External Profiles</legend>
<?php foreach($profiles as $profile) { ?>
	<?=HTML::anchor($profile->label, $profile->link);?>
	<br />
<?php } ?>
</fieldset>
