<?php

namespace Phi;

class Filter
{
    public static function validate(string $type): bool
    {

        return defined(Type::class."::$type");
    }

    public static function sanitize(string $type): string
    {

        return strtoupper(trim($type));
    }
}
