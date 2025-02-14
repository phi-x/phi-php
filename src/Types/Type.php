<?php

declare(strict_types=1);

namespace Phi\Types;

use Phi\Enums\TypeName;

interface Type
{
    public function is(string|TypeName|self $type): bool;
}
