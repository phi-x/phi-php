<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use BadFunctionCallException as BaseException;

class BadFunctionCallException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
