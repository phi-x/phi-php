<?php

declare(strict_types=1);

namespace Phi\Contracts;

interface IsInt extends IsNumber
{
    public function __invoke(mixed $value = null): int;

    public function get(): int;
}
