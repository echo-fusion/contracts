<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\RouteManager;

use Psr\Http\Message\ServerRequestInterface;

interface RouteMatcherInterface
{
    public function match(ServerRequestInterface $request, RouteInterface $route): ?RouteMatchInterface;
}
