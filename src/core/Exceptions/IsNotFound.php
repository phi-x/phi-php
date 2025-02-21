<?php

declare(strict_types=1);

namespace Phi\Exceptions;

use Psr\Container\NotFoundExceptionInterface;

interface IsNotFound extends IsException, NotFoundExceptionInterface {}
