<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use LengthException as BaseException;
use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;

class LengthException extends BaseException implements IsException
{
    use CanCreateException;
}
