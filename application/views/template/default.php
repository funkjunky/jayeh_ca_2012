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
 <?php echo HTML::style("public/css/template.css"); ?>
 <?php foreach($js as $j) { ?>
 	<?=HTML::script($j);?>
 <?	} ?>
 <!-- and how you add JS files in Kohana-->
 <?php echo HTML::script("public/js/jquery-1.6.4.js"); ?>
</head>

<body>
 <div id="content">
  <?php echo $content; ?>
 </div>
</body>
</html>
