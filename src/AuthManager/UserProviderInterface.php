<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\AuthManager;

/**
 * Where users come from: a database, an array, an API, an ORM ...
 */
interface UserProviderInterface
{
    public function findById(string|int $id): ?UserInterface;

    /**
     * Find a user by the identifying credentials (e.g. `['email' => ...]`). The `password` key,
     * if present, must be ignored here; it is checked by {@see validateCredentials()}.
     *
     * @param array<string, mixed> $credentials
     */
    public function findByCredentials(array $credentials): ?UserInterface;

    /**
     * Whether the credentials (the `password` key) match the user.
     *
     * @param array<string, mixed> $credentials
     */
    public function validateCredentials(UserInterface $user, array $credentials): bool;

    /**
     * Find the user that owns an API token, or null when none does or tokens are not supported.
     */
    public function findByToken(string $token): ?UserInterface;
}
