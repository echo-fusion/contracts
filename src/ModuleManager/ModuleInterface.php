<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\ModuleManager;

use EchoFusion\Contracts\ServiceProvider\ServiceProviderInterface;

/**
 * A self-contained feature bundle (e.g. "Blog") that declares what it adds to the application.
 */
interface ModuleInterface
{
    /**
     * Unique module name, used as the registry key and as the template namespace.
     *
     * @return non-empty-string
     */
    public function getName(): string;

    /**
     * Configuration merged into the application configuration.
     *
     * @return array<string, mixed>
     */
    public function getConfig(): array;

    /**
     * Service providers the module needs.
     *
     * @return list<class-string<ServiceProviderInterface>>
     */
    public function getProviders(): array;

    /**
     * Routes in the format accepted by RouteLoaderInterface::fromArray().
     *
     * @return array<non-empty-string, array{
     *     method: string,
     *     path: non-empty-string,
     *     action: mixed,
     *     constraints?: array<string,non-empty-string>|null,
     *     middlewares?: list<non-empty-string>
     * }>
     */
    public function getRoutes(): array;

    /**
     * Directory that holds the module templates, or null when it has none.
     */
    public function getTemplatePath(): ?string;
}
