<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta name="author" content="Célian Burst">
	

	<link rel="icon" type="image/png" href="/ACAD_MMI/assets/media/favicon.png">
	
	<title><?= $page_name ?></title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
	/>

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<?php
	$componentsStyle = scandir(HOME_URL ."/assets/css/components");
	foreach ($componentsStyle as $file) {
		if ($file !== ".." && $file !== ".") {
			echo "<link rel='stylesheet' type='text/css' href='".$base_url."assets/css/components/$file'>";
		}
	}
	
	$layoutsStyle = scandir(HOME_URL ."/assets/css/layout");
	foreach ($layoutsStyle as $file) {
		if ($file !== ".." && $file !== ".") {
			echo "<link rel='stylesheet' type='text/css' href='".$base_url."assets/css/layout/$file'>";
		}
	}
	?>
	
	<link rel="stylesheet" href="<?= $base_url ?>assets/css/pages/style.css">
</head>
<body>
<script type="module">
	import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

	const swiper = new Swiper(...)
</script>
