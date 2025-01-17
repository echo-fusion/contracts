<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\MiddlewareManager;

use Psr\Http\Server\MiddlewareInterface;

interface MiddlewarePipelineInterface
{
    public function isPipeLineEmpty(): bool;

    public function makePipelineEmpty(): void;

    public function add(MiddlewareInterface $middleware): void;

    public function remove(MiddlewareInterface $middleware): void;
}
