<?php

namespace Phi\Exceptions;

final class CannotReflect extends \ReflectionException implements IsException
{
    use HasExceptionConstructor;
}
