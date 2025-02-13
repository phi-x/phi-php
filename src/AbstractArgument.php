<?php

declare(strict_types=1);

namespace Phi;

/**
 * The argument abstract class
 *
 * @author SIGUI Kessé Emmanuel
 * @license MIT
 */
abstract class AbstractArgument implements \Stringable, ArgumentInterface
{
    /**
     * Parse the argument to string
     *
     * @return string The name of argument
     */
    public function __toString(): string
    {
        return $this->name();
    }
}
