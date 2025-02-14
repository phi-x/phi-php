<?php

declare(strict_types=1);

namespace Phi\Bases;

use Phi\Concerns\AsArgument;
use Phi\Contracts\IsArgument;

abstract class BaseArgument implements IsArgument
{
    use AsArgument;
}
