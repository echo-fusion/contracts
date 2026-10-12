<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\AuthManager;

interface AuthManagerInterface
{
    /**
     * A named guard, or the default one when no name is given. Guards are created lazily and reused.
     */
    public function guard(?string $name = null): GuardInterface;

    public function has(string $name): bool;

    public function getDefaultGuardName(): string;
}
