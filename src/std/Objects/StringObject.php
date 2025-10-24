<?php

declare(strict_types=1);

namespace Phi\Objects;

use Phi\Concerns\AsString;
use Phi\Contracts\IsString;

class StringObject implements IsString
{
    use AsString;

    public function __construct(protected string $value) {}

    public function get(): string
    {
        return $this->value;
    }
}
