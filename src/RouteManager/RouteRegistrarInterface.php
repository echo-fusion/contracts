<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\RouteManager;

use Closure;

/**
 * Registers routes. Each method returns the registrar so calls can be chained.
 */
interface RouteRegistrarInterface
{
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
}
