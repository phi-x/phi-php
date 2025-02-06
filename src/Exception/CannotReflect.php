<?php

namespace Phi\Exception;

final class CannotReflect extends \ReflectionException implements IsException
{
    use HasExceptionConstructor;
}
