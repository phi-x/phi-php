<?php

namespace Phi\Events;

trait Emitter
{
    /**
     * Emit an event
     *
     * @param  string  $event  The event name
     *                         Takes other optional arguments
     */
    public function emit(string $event, ...$args)
    {
        if (method_exists($this, $event)) {
            return $this->$event(...$args);
        }
        throw new Error("Cannot emit \"$event\" on ".$this::class, Error::EMITTING);
    }
}
