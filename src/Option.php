<?php

declare(strict_types=1);

namespace Phi;

use Phi\Bases\BaseOption;

class Option extends BaseOption
{
    public function __construct(int|string $key, mixed $value)
    {
        $this->setKey($key)->setValue($value);
    }
}
