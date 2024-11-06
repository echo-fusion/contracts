<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\ServiceManager;

interface ServiceManagerInterface extends SettableContainerInterface
{
    public function enableOverride(bool $enable): void;

    public function getAllowOverride(): bool;

    /**
     * @param non-empty-string $id
     */
    public function resolve(string $id): mixed;
}
