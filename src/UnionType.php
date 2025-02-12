<?php

namespace Phi;

class UnionType extends Type
{
    protected array $types;

    public function __construct(Type ...$types)
    {
        $this->types = $types;
    }
}
