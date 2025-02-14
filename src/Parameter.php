<?php

declare(strict_types=1);

namespace Phi;

use Phi\Bases\BaseParameter;
use Phi\Enums\TypeName;
use Phi\Types\Type;

class Parameter extends BaseParameter
{
    public function __construct(string|TypeName|Type $type, string $name, mixed $value)
    {
        $this->setType($type)->setName($name)->setValue($value);
    }
}
