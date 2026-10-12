<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\ConfigManager;

interface ConfigInterface
{
    /**
     * Get a value by key. Nested values are addressed with dot notation
     * (e.g. "database.host"). The default is returned when the key is missing.
     */
    public function get(string $key, mixed $default = null): mixed;

    /**
     * Whether the key exists, even if its value is null.
     */
    public function has(string $key): bool;

    /**
     * The whole merged configuration.
     *
     * @return array<string, mixed>
     */
    public function all(): array;
}
