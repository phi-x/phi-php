<?php

declare(strict_types=1);

namespace Phi;

class IntersectionType extends Type
{
    protected array $types;

    public function __construct(Type ...$types)
    {
        $this->types = $types;
    }
}
