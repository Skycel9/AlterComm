<?php
$request = $_SERVER['REQUEST_URI'];

$files = scandir("views");
$page_name = "";

if ($request === "/") {
	require __DIR__ . '/views/index.php';
}

foreach ($files as $file) {
	if ($file !== "." && $file !== "..") {
		$file = str_replace(".php", "", $file);
		
		if ($request === "/" . $file) {
			require __DIR__ . "/views/$file.php";
		}
	}
}