<?php

declare(strict_types=1);

namespace Phi\Bases;

use Phi\Contracts\IsParameter;
use Phi\Contracts\IsType;
use Phi\Enums\TypeName;

abstract class BaseParameter implements IsParameter
{
    public function __construct(string|TypeName|IsType $type, string $name, mixed $value)
    {
        $this->setType($type)->setName($name)->setValue($value);
    }
}
