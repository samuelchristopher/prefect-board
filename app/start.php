<?php

use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

session_start();

require '../vendor/autoload.php';

$app = new Slim([
    'view' => new Twig()
]);

$view = $app->view();
$view->setTemplatesDirectory('../app/views');
$view->parserExtensions = [
  new TwigExtension(),
];

require 'routes.php';
