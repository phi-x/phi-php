<?php

declare(strict_types=1);

namespace Phi\Types;

use Phi\Bases\BaseType;
use Phi\Concerns\AsNamedType;
use Phi\Contracts\IsNamedType;
use Phi\Enums\BuiltinType;

final class NamedType extends BaseType implements IsNamedType
{
    use AsNamedType;

    public function __construct(string|BuiltinType $name, bool $nullable = false)
    {
        parent::__construct($nullable);

        if ($name instanceof BuiltinType) {
            $name = $name->value;
        }

        $this->name = $name;
    }
}
