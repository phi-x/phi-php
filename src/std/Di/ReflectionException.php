<?php

declare(strict_types=1);

namespace Phi\Di;

use Phi\Exceptions\ExceptionInterface;
use Phi\Exceptions\ExceptionTrait;
use ReflectionException as BaseException;

final class ReflectionException extends BaseException implements ExceptionInterface
{
    use ExceptionTrait;
}
