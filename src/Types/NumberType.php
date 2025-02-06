<?php

declare(strict_types=1);

namespace Phi\Types;

interface NumberType extends NumericType
{
    public function __invoke(mixed $value = null): int|float;

    public function get(): int|float;
}
