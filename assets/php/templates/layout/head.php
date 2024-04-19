<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $page_name ?></title>

	<?php
	$componentsStyle = scandir(HOME_URL ."/assets/css/components");
	foreach ($componentsStyle as $file) {
		if ($file !== ".." && $file !== ".") {
			echo "<link rel='stylesheet' type='text/css' href='".$base_url."assets/css/components/$file'>";
		}
	}
	
	$layoutsStyle = scandir(HOME_URL ."/assets/css/components");
	foreach ($layoutsStyle as $file) {
		if ($file !== ".." && $file !== ".") {
			echo "<link rel='stylesheet' type='text/css' href='".$base_url."assets/css/layout/$file'>";
		}
	}
	?>
	
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/pages/style.css">
</head>
<body>
