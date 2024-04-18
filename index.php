<?php
$request = $_SERVER['REQUEST_URI'];

$base_url = "/";

$files = scandir("views");
$page_name = "";

if ($request === $base_url) {
	require __DIR__ . "$base_url/views/index.php";
}

foreach ($files as $file) {
	if ($file !== "." && $file !== "..") {
		$file = str_replace(".php", "", $file);
		
		if ($request === $base_url . "/views/" . $file) {
			require __DIR__ . "/$base_url"."/views/$file.php";
		}
	}
}