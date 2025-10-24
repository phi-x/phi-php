<?php

declare(strict_types=1);

namespace Phi\Contracts;

interface HasIndex
{
    public function setIndex(int $index): static;

    public function getIndex(): int;

    public function indexIs(int $index): bool;
}
