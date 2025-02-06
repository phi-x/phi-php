<?php

declare(strict_types=1);

namespace Phi\Objects;

use Phi\Concerns\AsMixed;
use Phi\Types\MixedType;

class MixedObject implements MixedType
{
    use AsMixed;

    public function __construct(protected mixed $value) {}

    public function get(): mixed
    {
        return $this->value;
    }
}
