<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use DomainException as BaseException;

class DomainException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
