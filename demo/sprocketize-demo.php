<?php require_once('../lib/sprocket.php');

// get path from request
$filePath = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);

// prepare sprocket
$sprocket = new Sprocket($filePath, array(
	'baseUri' => '/repos/php-sprockets', 
	'debugMode' => true
));
$sprocket->render();
?>