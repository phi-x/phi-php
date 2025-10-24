<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use RangeException as BaseException;

class RangeException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
