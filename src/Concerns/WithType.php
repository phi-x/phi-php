<?php

declare(strict_types=1);

namespace Phi\Concerns;

use Phi\Contracts\IsType;
use Phi\Enums\BuiltinType;
use Phi\Types\NamedType;

trait WithType
{
    protected IsType $type;

    public function setType(string|BuiltinType|IsType $type): static
    {
        if (! $type instanceof IsType) {
            $type = new NamedType($type);
        }

        $this->type = $type;

        return $this;
    }

    public function getType(): IsType
    {
        return $this->type;
    }

    public function typeIs(string|BuiltinType|IsType $type): bool
    {
        return $this->type->is($type);
    }
}
