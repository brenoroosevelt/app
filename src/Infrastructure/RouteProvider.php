<?php
declare(strict_types=1);

namespace App\Infrastructure;

use App\Actions\HelloWorld;
use League\Route\Router;

class RouteProvider implements \BrenoRoosevelt\Http\RouteProvider
{
    public function registerRoutes(Router $router): void
    {
        $router->get('/', HelloWorld::class);
    }
}
