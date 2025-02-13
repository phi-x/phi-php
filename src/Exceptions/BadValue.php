<?php

declare(strict_types=1);

namespace Phi\Exceptions;

final class BadValue extends \UnexpectedValueException implements IsException
{
    use HasExceptionConstructor;
}
