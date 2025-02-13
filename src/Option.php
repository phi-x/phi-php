<?php

namespace Phi;

use Phi\Concerns\WithKeyAndValue;
use Phi\Contracts\HasKeyAndValue;

class Option implements HasKeyAndValue
{
    use WithKeyAndValue;

    public function __construct(int|string $key, mixed $value)
    {
        $this->setKey($key)->setValue($value);
    }
}
