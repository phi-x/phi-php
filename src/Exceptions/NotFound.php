<?php

namespace Phi\Exceptions;

final class NotFound extends \InvalidArgumentException implements IsNotFound
{
    use HasExceptionConstructor;
}
