<?php

declare(strict_types=1);

namespace Phi\Objects;

use Phi\Concerns\AsNumber;
use Phi\Types\NumberType;

class NumberObject implements NumberType
{
    use AsNumber;

    public function __construct(protected int|float $value) {}

    public function get(): int|float
    {
        return $this->value;
    }
}
