<?php

declare(strict_types=1);

namespace Phi;

interface Statement
{
    public static function parse(mixed $value): self;
}
