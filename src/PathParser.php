<?php

namespace Phi;

interface PathParser
{
    /**
     * Parse the parser path
     *
     * @return namespace\PathParsed
     */
    public function parse(): PathParsed;
}
