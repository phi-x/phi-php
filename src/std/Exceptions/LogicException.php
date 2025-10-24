<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use LogicException as BaseException;

class LogicException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
