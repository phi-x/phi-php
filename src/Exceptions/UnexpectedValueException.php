<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;
use UnexpectedValueException as BaseException;

class UnexpectedValueException extends BaseException implements IsException
{
    use CanCreateException;
}
