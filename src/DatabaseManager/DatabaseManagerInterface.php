<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\DatabaseManager;

interface DatabaseManagerInterface
{
    /**
     * A named connection, or the default one when no name is given. Connections are created lazily and reused.
     */
    public function connection(?string $name = null): ConnectionInterface;

    public function has(string $name): bool;

    public function getDefaultConnectionName(): string;
}
