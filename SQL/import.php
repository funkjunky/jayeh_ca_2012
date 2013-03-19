<?php
	define("USER", "root");
	define("PASS", "root");

	$db = new PDO("mysql:host=127.0.0.1;port=8889", USER, PASS);
	$db->exec("CREATE DATABASE IF NOT EXISTS jayeh");
	$db->exec("USE jayeh");

	$handle = opendir('.');
	while(false !== ($entry = readdir($handle)))
	{
		if(".sql" !== pathinfo($entry, PATHINFO_EXTENSION))
			continue;

		$sql = file_get_contents($entry);
		$db->beginTransaction();
			$db->exec($sql);
		$db->commit();
	}	
?>
