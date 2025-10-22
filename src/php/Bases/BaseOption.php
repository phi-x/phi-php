<?php

declare(strict_types=1);

namespace Phi\Bases;

use Phi\Contracts\IsOption;

abstract class BaseOption implements IsOption
{
    public function __construct(int|string $key, mixed $value)
    {
        $this->setKey($key)->setValue($value);
    }
}
