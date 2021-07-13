<?php
declare(strict_types=1);

use App\Infrastructure\RouteProvider;
use App\Infrastructure\ServiceProvider;
use BrenoRoosevelt\Http\Http;
use Habemus\Container;
use Middlewares\Whoops;

require __DIR__ . '/../vendor/autoload.php';

/* DEPENDENCIES */
$container = new Container();
$container->addProvider(new ServiceProvider());

/* CREATE APP */
$app = new Http($container);

/* MIDDLEWARES */
$app->append(new Whoops()); // Error handler

/* ROUTES */
$app->addRouteProvider(RouteProvider::class);

/* DISPATCH */
$app->run();
