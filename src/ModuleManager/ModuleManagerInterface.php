<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\ModuleManager;

use EchoFusion\Contracts\ServiceProvider\ServiceProviderInterface;

interface ModuleManagerInterface
{
    /**
     * Register a module. Modules keep their registration order.
     */
    public function register(ModuleInterface $module): void;

    public function has(string $name): bool;

    public function get(string $name): ModuleInterface;

    /**
     * @return array<non-empty-string, ModuleInterface> registered modules keyed by name, in registration order
     */
    public function all(): array;

    /**
     * Configuration of all modules, merged in registration order.
     *
     * @return array<string, mixed>
     */
    public function getConfig(): array;

    /**
     * Service providers of all modules, without duplicates.
     *
     * @return list<class-string<ServiceProviderInterface>>
     */
    public function getProviders(): array;

    /**
     * Routes of all modules, keyed by route name.
     *
     * @return array<non-empty-string, array<string, mixed>>
     */
    public function getRoutes(): array;

    /**
     * Template directories keyed by module name, for modules that have templates.
     *
     * @return array<non-empty-string, non-empty-string>
     */
    public function getTemplatePaths(): array;
}
