<?php

declare(strict_types=1);

namespace Phi;

use Phi\Bases\BaseArgument;

abstract class AbstractCommand extends BaseArgument implements CommandInterface
{
    public function __invoke(...$args): bool
    {
        return $this->execute(...$args);
    }

    public function __toString(): string
    {
        $string = parent::__toString();
        foreach ($this->getActions() as $action) {
            $string .= ' '.$action->__toString();
        }

        return $string;
    }
}
