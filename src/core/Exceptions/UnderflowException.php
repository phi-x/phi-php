<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;
use UnderflowException as BaseException;

class UnderflowException extends BaseException implements IsException
{
    use CanCreateException;
}
