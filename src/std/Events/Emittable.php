<?php

declare(strict_types=1);

namespace Phi\Events;

interface Emittable
{
    /**
     * Emit an event
     *
     * @param  string  $event  The event name
     *                         Takes other optional arguments
     */
    public function emit(string $event, ...$args);
}
