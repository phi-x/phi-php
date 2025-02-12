<?php

namespace Phi;

/**
 * The argument interface
 *
 * @author SIGUI Kessé Emmanuel
 * @license MIT
 */
interface ArgumentInterface
{
    /**
     * Get the argument name
     *
     * @return string $name The argument name
     */
    public function name(): string;
}
