<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\AuthManager;

/**
 * Whoever can be authenticated. Deliberately tiny, so it is not tied to any ORM or entity class.
 */
interface UserInterface
{
    /**
     * The unique id, as stored in the session and used to load the user again.
     */
    public function getAuthIdentifier(): string|int;

    /**
     * The password hash, or null for users without a password (e.g. token-only).
     */
    public function getAuthPassword(): ?string;
}
