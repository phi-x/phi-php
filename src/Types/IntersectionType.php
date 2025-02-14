<?php

declare(strict_types=1);

namespace Phi\Types;

use Phi\Enums\TypeName;

class IntersectionType implements Type
{
    protected array $types;

    public function __construct(Type ...$types)
    {
        $this->types = $types;
    }

    public function is(string|TypeName|Type $type): bool
    {
        foreach($this->types as $type) {
            if (!$type->is($type)) {
                return false;
            }
        }

        return true;
    }
}
