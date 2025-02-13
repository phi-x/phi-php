<?php

namespace Phi\Concerns;

trait WithValue
{
    protected mixed $value;

    public function setValue(mixed $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

    public function valueIs(mixed $value): bool
    {
        return $this->value === $value;
    }
}
