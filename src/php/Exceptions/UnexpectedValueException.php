<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use UnexpectedValueException as BaseException;

class UnexpectedValueException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
