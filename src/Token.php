<?php

namespace Phi;

class Token
{
    public function __construct(readonly string $type, readonly string $value) {}
}
