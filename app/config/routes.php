<?php
$router = new Phalcon\Mvc\Router(false);
$router->add('/:controller/:action/:params', [
    'namespace'  => 'Compropolis\Controllers',
    'controller' => 1,
    'action'     => 2,
    'params'     => 3,
]);
$router->add('/:controller', [
    'namespace'  => 'Compropolis\Controllers',
    'controller' => 1
]);

$router->add(
    "/admin",
    [
        'namespace'  => 'Compropolis\Controllers\Admin',
        "controller" => "index",
        "action"     => "index",
    ]
);
$router->add(
    "/admin/",
    [
        'namespace'  => 'Compropolis\Controllers\Admin',
        "controller" => "index",
        "action"     => "index",
    ]
);

// URL que empiece con /admin/
$router->add('/admin/:controller/:action/:params', [
    'namespace'  => 'Compropolis\Controllers\Admin',
    'controller' => 1,
    'action'     => 2,
    'params'     => 3,
]);
$router->add('/admin/:controller', [
    'namespace'  => 'Compropolis\Controllers\Admin',
    'controller' => 1
]);
$router->add('/admin/:controller/', [
    'namespace'  => 'Compropolis\Controllers\Admin',
    'controller' => 1
]);


return $router;