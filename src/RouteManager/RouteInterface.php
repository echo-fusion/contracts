<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\RouteManager;

use Closure;

/**
 * A route definition. It is a value: it is created complete and never changes.
 */
interface RouteInterface
{
    public function getMethod(): string;

    /**
     * @return non-empty-string
     */
    public function getName(): string;

    /**
     * @return array<array-key, mixed>|Closure
     */
    public function getAction(): array|Closure;

    /**
     * @return list<class-string>
     */
    public function getMiddlewares(): array;

    /**
     * @return array<string, non-empty-string>|null
     */
    public function getConstraints(): ?array;

    public function getPath(): string;
}
