<?php

namespace Phi;

use Phi\Concerns\AsNamed;
use Phi\Contracts\IsNamed;

class Alias implements IsNamed
{
    use AsNamed;

    public function __construct(string $name)
    {
        $this->setName($name);
    }
}
