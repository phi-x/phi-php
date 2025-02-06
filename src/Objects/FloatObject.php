<?php

declare(strict_types=1);

namespace Phi\Objects;

use Phi\Concerns\AsFloat;
use Phi\Types\FloatType;

class FloatObject implements FloatType
{
    use AsFloat;

    public function __construct(protected float $value) {}

    public function get(): float
    {
        return $this->value;
    }
}
