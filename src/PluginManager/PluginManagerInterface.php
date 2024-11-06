<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\PluginManager;

interface PluginManagerInterface
{
    /**
     * @param non-empty-string $environment
     */
    public function register(string $environment): void;

    /**
     * @param non-empty-string $pluginName
     */
    public function isRegistered(string $pluginName): bool;

    /**
     * @param non-empty-string $pluginClass
     */
    public function getPlugin(string $pluginClass): PluginInterface;
}
