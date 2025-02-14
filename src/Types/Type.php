<?php

declare(strict_types=1);

namespace Phi\Types;

use Phi\Concerns\AsType;
use Phi\Contracts\IsType;

abstract class Type implements IsType
{
    use AsType;

    public function __construct(bool $nullable = false)
    {
        $this->nullable = $nullable;
    }
}
