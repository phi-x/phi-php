<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;
use RuntimeException as BaseException;

class RuntimeException extends BaseException implements IsException
{
    use CanCreateException;
}
