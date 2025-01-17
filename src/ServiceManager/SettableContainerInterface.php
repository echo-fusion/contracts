<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\ServiceManager;

use Psr\Container\ContainerInterface;

interface SettableContainerInterface extends ContainerInterface
{
    public function set(string $id, callable|string $service, bool $shared = false): void;
}
