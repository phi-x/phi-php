<?php

declare(strict_types=1);

namespace Phi;

class Declaration
{
    public function __construct(readonly Type $type, readonly string $name) {}
}
