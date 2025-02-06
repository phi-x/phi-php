<?php

use Phi\Backtrace;
use Phi\Map;

if (! function_exists('phi_backtrace')) {
    function phi_backtrace(int $flags = Backtrace::DEFAULT_FLAGS, int $reset = Backtrace::DEFAULT_RESET, int $limit = Backtrace::DEFAULT_LIMIT): Backtrace
    {
        return new Backtrace($flags, ++$reset, $limit === 0 ? $limit : ++$limit);
    }
}

if (! function_exists('phi_map')) {
    function phi_map(string $key_type, string $value_type): Map
    {
        return new Map($key_type, $value_type);
    }
}
