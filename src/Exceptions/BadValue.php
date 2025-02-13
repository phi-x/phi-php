<?php

namespace Phi\Exceptions;

final class BadValue extends \UnexpectedValueException implements IsException
{
    use HasExceptionConstructor;
}
