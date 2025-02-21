<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use OutOfBoundsException as BaseException;
use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;

class OutOfBoundsException extends BaseException implements IsException
{
    use CanCreateException;
}
