<?php

namespace Phi;

class Exception extends \Exception
{
    /**
     * @var int Action error type
     */
    public const ORDER_NAME_ERROR_TYPE = 0x01;

    public const EXEC_ARGS_ERROR_TYPE = 0x02;

    public const INVALID_STREAM = 0x00001;
}
