<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;
use RangeException as BaseException;

class RangeException extends BaseException implements IsException
{
    use CanCreateException;
}
