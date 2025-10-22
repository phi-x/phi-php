<?php

declare(strict_types=1);

namespace Phi\Objects;

use Phi\Concerns\AsBool;
use Phi\Contracts\IsBool;

class BoolObject implements IsBool
{
    use AsBool;

    public function __construct(protected bool $value) {}

    public function get(): bool
    {
        return $this->value;
    }
}
