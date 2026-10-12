<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\RouteManager;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Finds the route for a request. Registering routes is a separate job: {@see RouteRegistrarInterface}.
 */
interface RouterInterface
{
    /**
     * @param non-empty-string $name
     */
    public function getRoute(string $name): ?RouteInterface;

    /**
     * @return array<RouteInterface>
     */
    public function getRoutes(): array;

    public function dispatch(ServerRequestInterface $request): RouteMatchInterface;
}
