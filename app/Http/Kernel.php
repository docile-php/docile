<?php

declare(strict_types=1);

namespace App\Http;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

final class Kernel implements RequestHandlerInterface
{
    /**
     * Handle an incoming HTTP request and return a response.
     *
     * Register global middleware and define the middleware pipeline here.
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        // TODO: build your middleware pipeline and dispatch to the router.
        throw new \RuntimeException('HTTP Kernel not configured. Override handle() in App\\Http\\Kernel.');
    }
}
