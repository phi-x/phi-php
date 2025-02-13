<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use BadMethodCallException as BaseException;
use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;

class BadMethodCallException extends BaseException implements IsException
{
    use CanCreateException;
}
