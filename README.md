# Contracts

[![CI](https://github.com/echo-fusion/contracts/actions/workflows/ci.yml/badge.svg)](https://github.com/echo-fusion/contracts/actions/workflows/ci.yml) [![Packagist](https://img.shields.io/packagist/v/echo-fusion/contracts.svg)](https://packagist.org/packages/echo-fusion/contracts) [![PHP](https://img.shields.io/badge/php-8.1%20%7C%208.2%20%7C%208.3-777bb4.svg)](https://www.php.net) [![License](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)

Welcome to the EchoFusion Contracts repository! This package defines the core interfaces and abstractions that are shared across the EchoFusion framework, ensuring consistency and flexibility in how components interact with each other.

> Part of [EchoFusion](https://github.com/echo-fusion), a modular PHP framework built from small packages.

## Installation

```bash
composer require echo-fusion/contracts
```

## Requirements

* PHP 8.1, 8.2 or 8.3

## What is inside

Every interface lives in the namespace `EchoFusion\Contracts\<Package>`. A package depends on this one instead of on another concrete package, so any implementation can be swapped for another.

| Namespace | Interfaces | Implemented by |
| --- | --- | --- |
| `AuthManager` | `AuthManagerInterface`, `GuardInterface`, `StatefulGuardInterface`, `UserInterface`, `UserProviderInterface`, `PasswordHasherInterface` | [authmanager](https://github.com/echo-fusion/authmanager) |
| `ConfigManager` | `ConfigInterface` | [configmanager](https://github.com/echo-fusion/configmanager) |
| `DatabaseManager` | `ConnectionInterface`, `DatabaseManagerInterface` | [databasemanager](https://github.com/echo-fusion/databasemanager) |
| `EventManager` | `EventInterface` (a PSR-14 stoppable event), `EventManagerInterface` (a PSR-14 dispatcher and listener provider) | [eventmanager](https://github.com/echo-fusion/eventmanager) |
| `MiddlewareManager` | `MiddlewareManagerInterface`, `MiddlewarePipelineInterface` | [middlewaremanager](https://github.com/echo-fusion/middlewaremanager) |
| `ModuleManager` | `ModuleInterface`, `ModuleManagerInterface` | [modulemanager](https://github.com/echo-fusion/modulemanager) |
| `PluginManager` | `PluginInterface` (receives the container), `PluginManagerInterface` | [pluginmanager](https://github.com/echo-fusion/pluginmanager) |
| `RouteManager` | `RouterInterface` (find a route), `RouteRegistrarInterface` (register routes), `RouteInterface` (immutable definition), `RouteMatchInterface`, `RouteMatcherInterface`, `RouteLoaderInterface` | [routemanager](https://github.com/echo-fusion/routemanager) |
| `ServiceManager` | `ServiceManagerInterface`, `SettableContainerInterface` | [servicemanager](https://github.com/echo-fusion/servicemanager) |
| `ServiceProvider` | `ServiceProviderInterface` | any package that registers services |
| `SessionManager` | `SessionInterface` | [sessionmanager](https://github.com/echo-fusion/sessionmanager) |
| `TemplateManager` | `TemplateEngineInterface`, `TemplateManagerInterface` | [templatemanager](https://github.com/echo-fusion/templatemanager) |

## Usage

Implement an interface in your own code, or type-hint it so any implementation can be passed in. For example, a service provider:

```php
use EchoFusion\Contracts\ServiceManager\ServiceManagerInterface;
use EchoFusion\Contracts\ServiceProvider\ServiceProviderInterface;

class MyServiceProvider implements ServiceProviderInterface
{
    public function register(ServiceManagerInterface $container): void
    {
        // Register your services here
    }

    public function boot(ServiceManagerInterface $container, array $config): void
    {
        // Boot your services here
    }
}
```

## Upgrading from 1.x to 2.0

| Change | What to do |
| --- | --- |
| `RouterInterface` no longer has `get()`, `post()` ... `options()` | They moved to `RouteRegistrarInterface`. Type-hint it where you register routes; the `Router` of routemanager implements both. |
| `RouteInterface` has no setters | Routes are values: create them complete (`new Route($name, $method, $path, $action, ...)`). |
| `EventManagerInterface` is a PSR-14 dispatcher | Call `dispatch($event)`; `trigger()` is gone from the interface. `detach()` is part of it. `EventInterface` extends PSR-14's `StoppableEventInterface`. |
| `PluginInterface::register()` receives a container | `register(SettableContainerInterface $container)`. |

Every other interface is unchanged, so packages that do not use the ones above only need their `echo-fusion/contracts` constraint widened to `^1.x || ^2.0`.

## Versioning

Contracts follow [semantic versioning](https://semver.org). A new interface or class is a minor release. Adding a method to an existing interface is a breaking change and needs a new major version.

## Testing

```bash
composer test
```

## Credits

- [Amir Shadanfar](https://github.com/amir-shadanfar)

## License

The MIT License (MIT). Please see [LICENSE](LICENSE) for more information.
