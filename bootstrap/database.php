<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$config = $container['settings']['database'];

$capsule = new Capsule;
$capsule->addConnection([
    'driver'    => $config['driver'],
    'host'      => $config['host'],
    'database'  => $config['dbname'],
    'username'  => $config['username'],
    'password'  => $config['password'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function ($c) use ($capsule) {
    
    /** @var \Illuminate\Database\Capsule\Manager $capsule */
    return $capsule->getConnection()->getPdo();
};

//$container['db'] = function ($c) {
//    $config = $c['settings']['database'];
//    $dsn = $config['driver'] . ':dbname=' . $config['dbname'] . ';host=' . $config['host'];
//
//    $pdo = new \PDO($dsn, $config['username'], $config['password']);
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
//
//    return $pdo;
//};


