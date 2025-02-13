<?php

namespace Phi;

interface UrlParser
{
    /**
     * Parse the parser url
     *
     * @return namespace\UrlParsed
     */
    public function parse(): UrlParsed;
}
