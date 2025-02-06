<?php

declare(strict_types=1);

namespace Phi\Types;

interface MixedType
{
    public function __invoke(mixed $value = null): mixed;

    public function get(): mixed;

    public static function of(mixed $value): self;
}
