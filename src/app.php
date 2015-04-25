<?php
require_once __DIR__ . '/../vendor/autoload.php';
$app = new Silex\Application();

$app->get('/', function() use($app) {
    return file_get_contents(__DIR__.'/../web/home.html');
});

return $app;
