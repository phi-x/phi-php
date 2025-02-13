<?php

declare(strict_types=1);

namespace Phi\Contracts;

interface HasValue
{
    public function setValue(mixed $value): static;

    public function getValue(): mixed;

    public function valueIs(mixed $value): bool;
}
