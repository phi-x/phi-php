<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use OutOfRangeException as BaseException;

class OutOfRangeException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
