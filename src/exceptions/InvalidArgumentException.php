<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use InvalidArgumentException as BaseException;

class InvalidArgumentException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
