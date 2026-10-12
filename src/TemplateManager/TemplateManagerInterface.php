<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\TemplateManager;

interface TemplateManagerInterface extends TemplateEngineInterface
{
    /**
     * Add a template directory. With a namespace, templates are addressed as "@namespace/name".
     *
     * @param non-empty-string $path
     * @param non-empty-string|null $namespace
     */
    public function addPath(string $path, ?string $namespace = null): void;

    /**
     * Make a variable available in every template.
     *
     * @param non-empty-string $name
     */
    public function addGlobal(string $name, mixed $value): void;
}
