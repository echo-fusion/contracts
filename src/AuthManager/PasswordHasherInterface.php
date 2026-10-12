<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\AuthManager;

interface PasswordHasherInterface
{
    public function hash(string $plain): string;

    public function verify(string $plain, string $hash): bool;

    /**
     * Whether the hash was made with weaker settings than the current ones and should be recomputed.
     */
    public function needsRehash(string $hash): bool;
}
