<?php

namespace Phi\Exception;

final class UnableToCall extends \BadFunctionCallException implements IsException
{
    use HasExceptionConstructor;
}
