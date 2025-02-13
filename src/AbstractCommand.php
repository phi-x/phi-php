<?php

declare(strict_types=1);

namespace Phi;

/**
 * The console command abstract class
 *
 * @author SIGUI Kessé Emmanuel
 * @license MIT
 */
abstract class AbstractCommand extends AbstractArgument implements CommandInterface
{
    /**
     * Call this execute
     *
     * @param  array  $args  The command arguments
     */
    public function __invoke(...$args): bool
    {
        return $this->execute(...$args);
    }

    /**
     * Parse the argument to string
     *
     * @return string The name of argument
     */
    public function __toString(): string
    {
        $string = parent::__toString();
        foreach ($this->getActions() as $action) {
            $string .= ' '.$action->__toString();
        }

        return $string;
    }
}
