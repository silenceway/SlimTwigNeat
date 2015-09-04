<?php
/**
 * User: sunilkolla
 * Date: 04/09/15
 * Time: 14:23
 */
require '../vendor/autoload.php';

$app = new \Slim\Slim([
    'view' => new \Slim\Views\Twig()
]);

// Database
/*
 * $app->container->singleton('db', function () {
    return new PDO('mysql:host=127.0.0.1;dbname=SampleDBName', 'root', '');
});
*/
// Views
$view = $app->view();
$view->setTemplatesDirectory('../app/views');
$view->parserExtensions = [
    new \Slim\Views\TwigExtension()
];

require 'routes.php';
$app->run();