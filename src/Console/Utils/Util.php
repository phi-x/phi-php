<?php

namespace Phi\Console\Utils;

class Util
{
    private static function normalizeMethod(string $method): string
    {
        return lcfirst(str_replace('_', '', ucwords((string) $method, '_')));
    }
}
