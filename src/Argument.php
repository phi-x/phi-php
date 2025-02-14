<?php

declare(strict_types=1);

namespace Phi;

use Phi\Bases\BaseArgument;

class Argument extends BaseArgument
{
    public function __construct(int $index, mixed $value)
    {
        $this->setIndex($index)->setValue($value);
    }
}
