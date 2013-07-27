<?php
require_once '../vendor/autoload.php';
$app = new Silex\Application();
$app['debug'] = true;

$app->get('/', function(){
    return 'hello world';
});

$app->run();
