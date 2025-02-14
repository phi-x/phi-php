<?php

declare(strict_types=1);

namespace Phi\Samples;

final class CustomClass implements CustomInterface
{
    use CustomTrait;

    public function __construct(string $name = 'World')
    {
        $this->setName($name);
    }
}
