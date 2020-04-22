<?php

require __DIR__ . '/../vendor/autoload.php';
$config = [
    'settings' => [
        'displayErrorDetails' => true,
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'slim',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => ''
        ]
    ]
];
$app = new \Slim\App($config);
$container = $app->getContainer();

$capsule = new \Illuminate\Database\Capsule\Manager;
$capsule->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();
$container['db'] = function($container) use ($capsule) {
    return $capsule;
};


require __DIR__ . "/controller.php";
require __DIR__ . "/../app/routes/api/v1/api.php";
require __DIR__ . "/../app/routes/web.php";
