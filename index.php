<?php
$request = $_SERVER['REQUEST_URI'];

$files = scandir("views");
$page_name = "";

$base_url = "/ACAD_MMI/";

if ($request === $base_url) {
	require __DIR__ . '/views/index.php';
}

foreach ($files as $file) {
	if ($file !== "." && $file !== "..") {
		$file = str_replace(".php", "", $file);
		
		if ($request === $base_url . $file) {
			require __DIR__ . "/views/$file.php";
		}
	}
}