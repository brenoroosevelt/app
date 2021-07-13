<?php
declare(strict_types=1);

namespace Tests\Actions;

use App\Actions\HelloWorld;
use BrenoRoosevelt\Http\ServerRequest;
use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    /** @test */
    public function shouldSayHello()
    {
        $helloWorld = new HelloWorld();
        $response = $helloWorld(ServerRequest::fromGlobals());
        $this->assertEquals('<h1>Hello, World!</h1>', (string) $response->getBody());
    }
}
