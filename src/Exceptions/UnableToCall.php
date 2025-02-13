<?php

declare(strict_types=1);

namespace Phi\Exceptions;

final class UnableToCall extends \BadFunctionCallException implements IsException
{
    use HasExceptionConstructor;
}
