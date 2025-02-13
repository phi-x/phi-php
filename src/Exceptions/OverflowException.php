<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use OverflowException as BaseException;
use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;

class OverflowException extends BaseException implements IsException
{
    use CanCreateException;
}
