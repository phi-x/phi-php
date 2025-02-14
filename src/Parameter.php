<?php

declare(strict_types=1);

namespace Phi;

use Phi\Bases\BaseParameter;
use Phi\Contracts\IsType;
use Phi\Enums\TypeName;

class Parameter extends BaseParameter
{
    public function __construct(string|TypeName|IsType $type, string $name, mixed $value)
    {
        $this->setType($type)->setName($name)->setValue($value);
    }
}
