<?php
require_once '../vendor/autoload.php';
$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Privider\TwigServiceProvider(), array(
  'twig.path' => '../views',
));

$app->get('/', function(){
    return 'hello world';
});

$app->get('/hello/{name}', function($name) use ($app) {
    return $app['twig']->render('hello.twig', array(
        'name'=>$name,
    ));
});
$app->run();
