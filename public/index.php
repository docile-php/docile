<?php

declare(strict_types=1);

use Nyholm\Psr7\Factory\Psr17Factory;

$app = require dirname(__DIR__) . '/bootstrap/app.php';

$app->container()->instance(\App\Http\Kernel::class, new \App\Http\Kernel(
    $app->container()->get(Router::class),
    $app->container(),
));

$psr17Factory = new Psr17Factory();
$request = $psr17Factory->createServerRequestFromGlobals();

$app->handleHttp($request, \App\Http\Kernel::class);
