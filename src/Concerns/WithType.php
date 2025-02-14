<?php

declare(strict_types=1);

namespace Phi\Concerns;

use Phi\Enums\TypeName;
use Phi\Types\NamedType;
use Phi\Types\Type;

trait WithType
{
    protected Type $type;

    public function setType(string|TypeName|Type $type): static
    {
        if (! $type instanceof Type) {
            $type = new NamedType($type);
        }

        $this->type = $type;

        return $this;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function typeIs(string|TypeName|Type $type): bool
    {
        return $this->type->is($type);
    }
}
