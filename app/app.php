<?php
require_once __DIR__ . '/bootstrap.php';

$app = new Silex\Application();
$app['debug'] = true;
$app['autoloader']->registerNamespace('App', __DIR__.'/../src');
        
$app->get('/', function ($name = null) use ($app) {
    return "Welcome to homepage!";
});

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

$app->post('/devices/register', function($name) use ($app) {
    
});

return $app;
