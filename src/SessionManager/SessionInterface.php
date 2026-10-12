<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\SessionManager;

interface SessionInterface
{
    /**
     * Start the session.
     */
    public function start(): void;

    /**
     * Write the session data and close the session.
     */
    public function save(): void;

    public function isActive(): bool;

    public function get(string $key, mixed $default = null): mixed;

    public function put(string $key, mixed $value): void;

    public function has(string $key): bool;

    public function forget(string $key): void;

    /**
     * Regenerate the session id (e.g. after login/logout to prevent fixation).
     */
    public function regenerate(): bool;

    /**
     * Store messages that are available until they are read once with getFlash().
     *
     * @param array<array-key, mixed> $messages
     */
    public function flash(string $key, array $messages): void;

    /**
     * Read and remove the flashed messages.
     *
     * @return array<array-key, mixed>
     */
    public function getFlash(string $key): array;
}
