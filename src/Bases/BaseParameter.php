<?php

declare(strict_types=1);

namespace Phi\Bases;

use Phi\Concerns\AsParameter;
use Phi\Contracts\IsParameter;

abstract class BaseParameter implements IsParameter
{
    use AsParameter;
}
