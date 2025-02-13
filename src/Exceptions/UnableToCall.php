<?php

namespace Phi\Exceptions;

final class UnableToCall extends \BadFunctionCallException implements IsException
{
    use HasExceptionConstructor;
}
