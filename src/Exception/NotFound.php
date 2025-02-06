<?php

namespace Phi\Exception;

final class NotFound extends \InvalidArgumentException implements IsNotFound
{
    use HasExceptionConstructor;
}
