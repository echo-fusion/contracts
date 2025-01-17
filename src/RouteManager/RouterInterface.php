<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\RouteManager;

use Closure;
use Psr\Http\Message\ServerRequestInterface;

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

    /**
     * @param non-empty-string $name
     * @param non-empty-string $path
     * @param list<non-empty-string>|Closure $action
     * @param array<string,non-empty-string>|null $constraints
     */
    public function get(string $name, string $path, array|Closure $action, ?array $constraints = []): self;

    /**
     * @param non-empty-string $name
     * @param non-empty-string $path
     * @param list<non-empty-string>|Closure $action
     * @param array<string,non-empty-string>|null $constraints
     */
    public function post(string $name, string $path, array|Closure $action, ?array $constraints = []): self;

    /**
     * @param non-empty-string $name
     * @param non-empty-string $path
     * @param list<non-empty-string>|Closure $action
     * @param array<string,non-empty-string>|null $constraints
     */
    public function put(string $name, string $path, array|Closure $action, ?array $constraints = []): self;

    /**
     * @param non-empty-string $name
     * @param non-empty-string $path
     * @param list<non-empty-string>|Closure $action
     * @param array<string,non-empty-string>|null $constraints
     */
    public function patch(string $name, string $path, array|Closure $action, ?array $constraints = []): self;

    /**
     * @param non-empty-string $name
     * @param non-empty-string $path
     * @param list<non-empty-string>|Closure $action
     * @param array<string,non-empty-string>|null $constraints
     */
    public function delete(string $name, string $path, array|Closure $action, ?array $constraints = []): self;

    /**
     * @param non-empty-string $name
     * @param non-empty-string $path
     * @param list<non-empty-string>|Closure $action
     * @param array<string,non-empty-string>|null $constraints
     */
    public function options(string $name, string $path, array|Closure $action, ?array $constraints = []): self;

    public function dispatch(ServerRequestInterface $request): RouteMatchInterface;
}
