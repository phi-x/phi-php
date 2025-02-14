<?php

declare(strict_types=1);

namespace Phi\Types;

use Phi\Bases\BaseType;
use Phi\Concerns\AsUnionType;
use Phi\Contracts\IsType;
use Phi\Contracts\IsUnionType;

final class UnionType extends BaseType implements IsUnionType
{
    use AsUnionType;

    public function __construct(bool $nullable = false, IsType ...$types)
    {
        parent::__construct($nullable);
        $this->types = $types;
    }
}
