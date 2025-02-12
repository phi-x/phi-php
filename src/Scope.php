<?php

namespace Phi;

class Scope
{
    public function __construct(readonly Container $container, readonly ?Scope $parent = null) {}
}
