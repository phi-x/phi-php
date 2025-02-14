<?php

declare(strict_types=1);

namespace Phi\Concerns;

trait AsType
{
    protected bool $nullable = false;

    public function allowsNull(): bool
    {
        return $this->nullable;
    }
}
