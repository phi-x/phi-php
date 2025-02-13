<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use InvalidArgumentException as BaseException;
use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;

class InvalidArgumentException extends BaseException implements IsException
{
    use CanCreateException;
}
