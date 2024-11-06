# EchoFusion Contracts
Welcome to the EchoFusion Contracts repository! This package defines the core interfaces and abstractions that are shared across the EchoFusion framework, ensuring consistency and flexibility in how components interact with each other.

## Install

Via Composer

``` bash
$ composer require echo-fusion/contracts
```

## Requirements

The following versions of PHP are supported by this version.

* PHP 8.1
* PHP 8.2
* PHP 8.3

## Usage

The EchoFusion Contracts package provides interfaces that are widely used across the EchoFusion ecosystem. The goal is to provide a set of reusable and extensible contracts to ensure all EchoFusion components follow a consistent structure and behavior.

For example, to use the ServiceProviderInterface in your application, you can implement it within your custom service providers:

```php
use EchoFusion\Contracts\ServiceProviderInterface;
use EchoFusion\Contracts\ServiceManagerInterface;

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

## Credits

Developed and maintained by [Amir Shadanfar](https://github.com/amir-shadanfar).  
Connect on [LinkedIn](https://www.linkedin.com/in/amir-shadanfar).

## License

The MIT License (MIT). Please see [License File](https://github.com/echo-fusion/servicemanager/blob/main/LICENSE) for more information.



