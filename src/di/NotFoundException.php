<?php

declare(strict_types=1);

namespace Phi\Di;

use Phi\Exceptions\Exception;
use Phi\Exceptions\ExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

final class NotFoundException extends Exception implements ExceptionInterface, NotFoundExceptionInterface {}
