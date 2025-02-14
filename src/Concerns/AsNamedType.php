<?php

declare(strict_types=1);

namespace Phi\Concerns;

use Phi\Enums\TypeName;
use Phi\Types\Type;

trait AsNamedType
{
    use AsNamed;

    public function is(string|TypeName|Type $type): bool
    {
        if ($type instanceof Type) {
            return $this->nameIs(get_class($type));
        }

        if ($type instanceof TypeName) {
            return $this->nameIs($type->value);
        }

        return $this->nameIs($type);
    }
}
