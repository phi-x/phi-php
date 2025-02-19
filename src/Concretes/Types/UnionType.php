<?php

declare(strict_types=1);

namespace Phi\Concretes\Types;

use Phi\Concerns\AsUnionType;
use Phi\Contracts\IsType;
use Phi\Contracts\IsUnionType;

final class UnionType extends Type implements IsUnionType
{
    use AsUnionType;

    public function __construct(bool $nullable = false, IsType ...$types)
    {
        parent::__construct($nullable);
        $this->types = $types;
    }
}
