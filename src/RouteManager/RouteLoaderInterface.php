<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\RouteManager;

interface RouteLoaderInterface
{
    /**
     * Registers routes from a configuration array.
     *
     * @param array<non-empty-string, array{
     *     method: string,
     *     path: non-empty-string,
     *     action: mixed,
     *     constraints?: array<string,non-empty-string>|null,
     *     middlewares?: list<non-empty-string>
     * }> $routes
     */
    public function fromArray(array $routes): void;
}
