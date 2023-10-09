<?php
spl_autoload_register(function ($class_name) {
	$file_path = 'classes/' . $class_name . '.php';
	if (file_exists($file_path)) {
		require_once $file_path;
	}
});
