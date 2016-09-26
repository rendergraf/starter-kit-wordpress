<?php
//require_once dirname(__FILE__).'/lib/Twig/Autoloader.php';
require_once dirname(__FILE__).'/Twig/Autoloader.php';
Twig_Autoloader::register(true);

$loader = new Twig_Loader_Filesystem('./views');

$twig = new Twig_Environment($loader, array(
	'cache' => '/wp-content/uploads/compilation_cache',
	'debug' => true));