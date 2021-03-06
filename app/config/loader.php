<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
)->register();


$loader
    ->registerNamespaces(
        [
            'Compropolis\Controllers' => __DIR__ . '/../controllers/',
            'Compropolis\Controllers\Admin' => __DIR__ . '/../controllers/admin/',
            'Compropolis\Models' => __DIR__ . '/../models/',
            'Compropolis\Library' => __DIR__ . '/../library/'
            
        ]
    )->register();

