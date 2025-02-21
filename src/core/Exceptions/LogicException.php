<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use LogicException as BaseException;
use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;

class LogicException extends BaseException implements IsException
{
    use CanCreateException;
}
