<?php

namespace Phi;

class Declaration
{
    public function __construct(readonly Type $type, readonly string $name) {}
}
