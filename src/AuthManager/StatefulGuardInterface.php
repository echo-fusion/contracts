<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\AuthManager;

/**
 * A guard that remembers the user between requests (e.g. in the session).
 */
interface StatefulGuardInterface extends GuardInterface
{
    /**
     * Try to log in with the credentials; returns whether it worked.
     *
     * @param array<string, mixed> $credentials
     */
    public function attempt(array $credentials): bool;

    public function login(UserInterface $user): void;

    public function logout(): void;
}
