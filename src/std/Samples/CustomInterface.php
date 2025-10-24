<?php

declare(strict_types=1);

namespace Phi\Samples;

use Phi\Contracts\IsEncapsulated;

interface CustomInterface extends IsEncapsulated
{
    public function getName(): string;

    public function setName(string $name): static;
}
