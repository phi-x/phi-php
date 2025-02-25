<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use OverflowException as BaseException;

class OverflowException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
