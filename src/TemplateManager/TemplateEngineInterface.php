<?php

declare(strict_types=1);

namespace EchoFusion\Contracts\TemplateManager;

interface TemplateEngineInterface
{
    /**
     * Render a template to a string.
     *
     * @param non-empty-string $name template name, optionally namespaced ("@blog/posts/index")
     * @param array<string, mixed> $params variables available in the template
     */
    public function render(string $name, array $params = []): string;

    /**
     * @param non-empty-string $name
     */
    public function exists(string $name): bool;
}
