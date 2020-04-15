<?php
require_once ('vendor/autoload.php');
require_once('config/routing.php');

$loader = new \Twig\Loader\FilesystemLoader('views');
$twig = new \Twig\Environment($loader, [
    //'cache' => '/path/to/compilation_cache',
]);

//echo $twig->render('index.html', ['name' => 'Fabien']);
routing($twig);
