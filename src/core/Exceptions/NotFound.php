<?php

declare(strict_types=1);

namespace Phi\Exceptions;

final class NotFound extends \InvalidArgumentException implements IsNotFound
{
    use HasExceptionConstructor;
}
