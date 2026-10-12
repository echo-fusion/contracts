<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\PluginManager;

use EchoFusion\Contracts\ServiceManager\SettableContainerInterface;

interface PluginInterface
{
    /**
     * Switch the plugin on: attach listeners, add services, replace implementations ...
     * It is called once, only when the plugin supports the current environment.
     */
    public function register(SettableContainerInterface $container): void;

    /**
     * @return list<non-empty-string>
     */
    public function getSupportedEnvironments(): array;
}
