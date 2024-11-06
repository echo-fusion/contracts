<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\RouteManager;

use Closure;

interface RouteInterface
{
    public function getMethod(): string;

    public function setMethod(string $method): self;

    public function getName(): string;

    /**
     * @param non-empty-string $name
     */
    public function setName(string $name): self;

    public function getAction(): array|Closure;

    /**
     * @param array<string,non-empty-string>|Closure $action
     */
    public function setAction(array|Closure $action): self;

    public function getMiddlewares(): array;

    /**
     * @param list<class-string> $middlewares
     */
    public function setMiddlewares(string ...$middlewares): self;

    public function getConstraints(): ?array;

    /**
     * @param array<string, non-empty-string> $constraints
     */
    public function setConstraints(?array $constraints): self;

    public function getPath(): string;
}
