<?php

declare(strict_types=1);

namespace Phi\Types;

interface FloatType extends NumberType
{
    public function __invoke(mixed $value = null): float;

    public function get(): float;
}
