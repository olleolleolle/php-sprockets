<?php
require_once '../lib/sprocket.php';

// get path from request
$filePath = preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI']);

// prepare sprocket
$sprocket = new Sprocket($filePath, array(
	'baseUri' => '/php-sprockets', 
	'debugMode' => true
));

// change base folder based on extension
switch ($sprocket->fileExt) {
	case 'css':
		$sprocket->setContentType('text/css')->setBaseFolder('/css');
		break;
	default: 
		$sprocket->setBaseFolder('/js');
		break;
}

// tada!
$sprocket->render();
