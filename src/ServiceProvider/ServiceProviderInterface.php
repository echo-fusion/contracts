<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\ServiceProvider;

use EchoFusion\Contracts\ServiceManager\ServiceManagerInterface;

interface ServiceProviderInterface
{
    public function register(ServiceManagerInterface $container): void;

    public function boot(ServiceManagerInterface $container, array $config): void;
}
