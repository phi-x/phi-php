<?php

declare(strict_types=1);

namespace Phi\Contracts;

use Phi\Enums\BuiltinType;
use Stringable;

interface IsType extends Stringable
{
    public function is(string|BuiltinType|self $type): bool;

    public function allowsNull(): bool;
}
