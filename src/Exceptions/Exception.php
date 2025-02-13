<?php

namespace Phi\Exceptions;

use Exception as BaseException;
use Phi\Concerns\CanCreateException;
use Phi\Contracts\IsException;

class Exception extends BaseException implements IsException
{
    use CanCreateException;

    /**
     * @var int Action error type
     */
    public const ORDER_NAME_ERROR_TYPE = 0x01;

    public const EXEC_ARGS_ERROR_TYPE = 0x02;

    public const INVALID_STREAM = 0x00001;

    const INVALID_NAME = 0x01;

    const NO_SUCH_FILE = 0x02;

    const NOT_READABLE = 0x03;

    const UNKNOWN_PATH = 0x04;
}
