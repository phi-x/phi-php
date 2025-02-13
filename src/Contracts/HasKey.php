<?php

namespace Phi\Contracts;

interface HasKey
{
    public function setKey(int|string $key): static;

    public function getKey(): int|string;

    public function keyIs(int|string $key): bool;
}
