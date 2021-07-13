<?php
declare(strict_types=1);

namespace App\Infrastructure;

use Habemus\Container;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Log\LoggerInterface;

class ServiceProvider implements \Habemus\ServiceProvider\ServiceProvider
{
    public function register(Container $container): void
    {
        //$container->add(ResponseFactoryInterface::class, Factory::getResponseFactory());
        //$container->add(UriFactoryInterface::class, Factory::getUriFactory());
        //$container->add(RequestFactoryInterface::class, Factory::getRequestFactory());
        $container->add(LoggerInterface::class, $this->logger());
    }

    private function logger(): LoggerInterface
    {
        $path = isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../tmp/logs/app.log';
        $logger = new Logger('app-log');
        $logger->pushProcessor(new UidProcessor());
        $logger->pushHandler(new StreamHandler($path, Logger::DEBUG));

        return $logger;
    }
}
