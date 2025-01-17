<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\PluginManager;

interface PluginInterface
{
    public function register(): void;

    /**
     * @return list<non-empty-string>
     */
    public function getSupportedEnvironments(): array;
}
