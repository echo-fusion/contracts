<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\EventManager;

use Psr\EventDispatcher\StoppableEventInterface;

/**
 * An event with a name and parameters. It is also a PSR-14 stoppable event, so any PSR-14 dispatcher can carry it.
 */
interface EventInterface extends StoppableEventInterface
{
    public function getName(): string;

    /**
     * @return array<array-key, mixed>
     */
    public function getParams(): array;

    public function stopPropagation(bool $flag): void;

    public function isPropagationStopped(): bool;
}
