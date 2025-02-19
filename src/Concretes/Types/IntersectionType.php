<?php

declare(strict_types=1);

namespace Phi\Concretes\Types;

use Phi\Concerns\AsIntersectionType;
use Phi\Contracts\IsIntersectionType;
use Phi\Contracts\IsType;

final class IntersectionType extends Type implements IsIntersectionType
{
    use AsIntersectionType;

    public function __construct(bool $nullable = false, IsType ...$types)
    {
        parent::__construct($nullable);
        $this->types = $types;
    }
}
