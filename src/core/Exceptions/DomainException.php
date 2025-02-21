<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use DomainException as BaseException;
use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;

class DomainException extends BaseException implements IsException
{
    use CanCreateException;
}
