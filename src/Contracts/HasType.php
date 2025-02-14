<?php

declare(strict_types=1);

namespace Phi\Contracts;

use Phi\Enums\TypeName;
use Phi\Types\Type;

interface HasType
{
    public function setType(Type $type): static;

    public function getType(): Type;

    public function typeIs(string|TypeName|Type $type): bool;
}
