<?php

declare(strict_types=1);

namespace Phi\Contracts;

use Phi\Enums\BuiltinType;

interface HasTypes
{
    /**
     * @return array<IsType>
     */
    public function getTypes(): array;

    public function hasType(string|BuiltinType|IsType $type): bool;
}
