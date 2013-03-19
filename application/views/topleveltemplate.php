<?php defined('SYSPATH') or die('No direct access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <title>Kohana Test Blog</title>
 <!--This is how you add CSS files in Kohana-->
 <!-- js can be added in a controller by setting $view->css
 	as well you can set many things like title, description, keywords, css, js, actually I think whatever you want.
	-->
 <?php foreach($js as $j) { ?>
 	<?=HTML::script($j);?>
 <?	} ?>
 <?php foreach($css as $cs) { ?>
 	<?=HTML::style($cs);?>
 <?	} ?>
 <!-- and how you add JS files in Kohana-->
</head>

<body>
<div id="header">
 <h1>Jayeh's <?=$headertext?></h1>
</div>
<hr />
<div id="body">
 <?=$content?>
</div>
</body>
</html>
