<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use BadFunctionCallException as BaseException;
use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;

class BadFunctionCallException extends BaseException implements IsException
{
    use CanCreateException;
}
