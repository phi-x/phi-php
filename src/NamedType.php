<?php

declare(strict_types=1);

namespace Phi;

class NamedType extends Type
{
    public function __construct(
        readonly string $name
    ) {}
}
