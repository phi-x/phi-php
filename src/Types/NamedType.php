<?php

declare(strict_types=1);

namespace Phi\Types;

use Phi\Concerns\AsNamedType;
use Phi\Contracts\IsNamedType;
use Phi\Enums\TypeName;

final class NamedType implements IsNamedType
{
    use AsNamedType;

    public function __construct(string|TypeName $name)
    {
        if ($name instanceof TypeName) {
            $name = $name->value;
        }

        $this->setName($name);
    }

    public function __toString(): string
    {
        return $this->getName();
    }
}
