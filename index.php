<?php
$request = $_SERVER['REQUEST_URI'];

const HOME_URL = __DIR__;

$files = scandir("views");
$page_name = "";

$base_url = "/ACAD_MMI/";

if ($request === $base_url) {
	$page_name = "Alter&comm";
	require __DIR__ . '/views/index.php';
}

foreach ($files as $file) {
	if ($file !== "." && $file !== "..") {
		$file = str_replace(".php", "", $file);
		
		if ($request === $base_url . $file) {
			$page_name = "Alter&comm - " . ucfirst(str_replace("-", " ", $file));
			require __DIR__ . "/views/$file.php";
		}
	}
}