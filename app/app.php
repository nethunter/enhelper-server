<?php

require_once __DIR__ . '/bootstrap.php';
$app = new Silex\Application();

$app->get('/hello/{name}', function ($name) use ($app) {
    return 'Hello '.$app->escape($name);
});

return $app;
