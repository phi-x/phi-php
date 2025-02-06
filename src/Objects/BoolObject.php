<?php

declare(strict_types=1);

namespace Phi\Objects;

use Phi\Concerns\AsBool;
use Phi\Types\BoolType;

class BoolObject implements BoolType
{
    use AsBool;

    public function __construct(protected bool $value) {}

    public function get(): bool
    {
        return $this->value;
    }
}
