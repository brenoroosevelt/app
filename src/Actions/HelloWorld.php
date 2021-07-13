<?php
declare(strict_types=1);

namespace App\Actions;

use Laminas\Diactoros\Response\HtmlResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class HelloWorld
{
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        return new HtmlResponse('<h1>Hello, World!</h1>');
    }
}
