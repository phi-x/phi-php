<?php

namespace Phi\Events;

class Error extends \Error
{
    /**
     * Events listening error code
     */
    public const LISTENING = 0x01;

    /**
     * Event emitting error code
     */
    public const EMITTING = 0x02;
}
