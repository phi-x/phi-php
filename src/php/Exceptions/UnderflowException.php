<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use UnderflowException as BaseException;

class UnderflowException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
