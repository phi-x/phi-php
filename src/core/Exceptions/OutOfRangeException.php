<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use OutOfRangeException as BaseException;
use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;

class OutOfRangeException extends BaseException implements IsException
{
    use CanCreateException;
}
