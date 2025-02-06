<?php

declare(strict_types=1);

namespace Phi\Types;

interface StringType extends ScalarType
{
    public function __invoke(mixed $value = null): string;

    public function get(): string;
}
