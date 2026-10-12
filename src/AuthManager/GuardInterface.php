<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\AuthManager;

/**
 * Decides who the current user is. A guard can be stateful (session) or stateless (token).
 */
interface GuardInterface
{
    public function user(): ?UserInterface;

    public function check(): bool;

    public function guest(): bool;

    public function id(): string|int|null;

    /**
     * Check credentials without logging anyone in.
     *
     * @param array<string, mixed> $credentials
     */
    public function validate(array $credentials): bool;
}
