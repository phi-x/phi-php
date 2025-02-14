<?php

declare(strict_types=1);

namespace Phi\Objects;

use Phi\Concerns\AsInt;
use Phi\Contracts\IsInt;

class IntObject implements IsInt
{
    use AsInt;

    public function __construct(protected int $value) {}

    public function get(): int
    {
        return $this->value;
    }
}
