<?php
require_once dirname(__FILE__).'/lib/loader.php';

$titulo = 'Mi página';
$saludo = 'Bienvenidos';

$person = [
	'nombre' => 'Xavier',
	'edad' => 40
];
echo $twig->render('base.twig', compact('person'));