<?php
declare(strict_types=1);

namespace Tests\Actions;

use App\Actions\HelloWorld;
use Middlewares\Utils\Factory;
use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    /** @test */
    public function shouldSayHello()
    {
        $helloWorld = new HelloWorld();
        $request = Factory::getServerRequestFactory()->createServerRequest('GET', '/');
        $response = $helloWorld($request);
        $this->assertEquals('<h1>Hello, World!</h1>', (string) $response->getBody());
    }
}
