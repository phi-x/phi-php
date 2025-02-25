<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use OutOfBoundsException as BaseException;

class OutOfBoundsException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
