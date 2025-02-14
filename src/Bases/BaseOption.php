<?php

declare(strict_types=1);

namespace Phi\Bases;

use Phi\Concerns\AsOption;
use Phi\Contracts\IsOption;

abstract class BaseOption implements IsOption
{
    use AsOption;
}
