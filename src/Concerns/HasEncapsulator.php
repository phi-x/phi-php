<?php

declare(strict_types=1);

namespace Phi\Concerns;

trait HasEncapsulator
{
    use HasAccessor;
    use HasModifier;
    use HasResolver;
}
