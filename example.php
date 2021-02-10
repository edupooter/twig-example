<?php
require_once './vendor/autoload.php';

$loader = new \Twig\Loader\ArrayLoader([
    'index' => 'Hello {{ name }}!',
]);

$loader = new \Twig\Loader\FilesystemLoader('./templates');

$twig = new \Twig\Environment($loader, [
    'cache' => './compilation_cache',
    'debug' => true,
]);

echo $twig->display('index.html', ['name' => 'Fabien']);
