<?php

namespace Phi\Exception;

final class BadValue extends \UnexpectedValueException implements IsException
{
    use HasExceptionConstructor;
}
