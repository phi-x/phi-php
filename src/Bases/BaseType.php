<?php

declare(strict_types=1);

namespace Phi\Bases;

use Phi\Concerns\AsType;
use Phi\Contracts\IsType;

abstract class BaseType implements IsType
{
    use AsType;

    public function __construct(bool $nullable = false)
    {
        $this->nullable = $nullable;
    }
}
