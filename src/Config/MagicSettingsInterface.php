<?php

namespace Phi\Config;

interface MagicSettingsInterface
{
    public function __get(string $key): mixed;

    public function __set(string $key, mixed $value): void;

    public function __isset(string $key): bool;

    public function __unset(string $key): void;
}
