<?php

namespace Phi;

interface Statement
{
    public static function parse(mixed $value): self;
}
