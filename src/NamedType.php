<?php

namespace Phi;

class NamedType extends Type
{
    public function __construct(
        readonly string $name
    ) {}
}
