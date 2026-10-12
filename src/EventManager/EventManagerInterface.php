<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\EventManager;

use Psr\EventDispatcher\EventDispatcherInterface;
use Psr\EventDispatcher\ListenerProviderInterface;

/**
 * A PSR-14 event dispatcher together with its listener provider.
 *
 * Listeners are attached under a key: the name of an {@see EventInterface}, or the class or interface name of
 * any event object. `dispatch()` calls the listeners of every key that matches the event, highest priority first.
 */
interface EventManagerInterface extends EventDispatcherInterface, ListenerProviderInterface
{
    /**
     * @param string $eventName an event name, or the class or interface name of the events to listen to
     * @param int $priority higher runs first; listeners with equal priority run in the order they were attached
     */
    public function attach(string $eventName, callable $listener, int $priority = 0): void;

    /**
     * @return bool whether the listener was attached
     */
    public function detach(string $eventName, callable $listener): bool;
}
